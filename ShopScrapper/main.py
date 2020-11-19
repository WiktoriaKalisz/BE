from math import nan

from selenium import webdriver
from bs4 import BeautifulSoup
import urllib.request
import pandas as pd
import time


def get_driver():
    options = webdriver.FirefoxOptions()
    options.add_argument('--headless')
    profile = webdriver.FirefoxProfile()
    profile.set_preference('javascript.enabled', True)
    return webdriver.Firefox(profile, options=options, executable_path='./geckodriver.exe')


def get_full_page(web_driver, page_url):
    web_driver.get(page_url)
    time.sleep(3)
    return BeautifulSoup(web_driver.page_source, 'html.parser')


def get_name(content):
    name = content.getText()
    return name.strip()


def get_links_and_make_categories(first_page):
    href = []
    categories = []
    number_of_cate = 1
    number = 1

    for main_category in first_page.findAll('li', attrs={'class': 'c-menu_item is-item0 is-parent'})[:3]:
        main_category_name = get_name(main_category.find('a', attrs={'class': 'c-menu_link is-link0 is-col1 is-limit-4'}))
        if main_category_name == 'Dziecięce':
            number_of_cate = 2
        categories.append([main_category_name, '', ''])
        number += 1

        for category in main_category.findAll('div', attrs={'class': 'c-menu clearfix is-level2'})[:number_of_cate]:
            category_name = get_name(category.find('h3', attrs={'class': 'a-typo is-secondary'}))
            categories.append([main_category_name, category_name, ''])
            number += 1

            for subcategory in category.findAll('a', attrs={'class': 'c-menu_link is-link2 is-col1 is-limit-4'}):
                subcategory_name = get_name(subcategory)
                categories.append([main_category_name, category_name, subcategory_name])
                href.append([subcategory.get_attribute_list('href')[0], number])
                number += 1

    df = pd.DataFrame(categories)
    df.to_csv('categories.csv', index=False, encoding='utf-8', header=False)
    return href


def make_products(product_links, web_driver):
    product_id = 1
    products = []
    for link in product_links:
        category_page = get_full_page(web_driver, link[0])
        for product_div in category_page.findAll('div', attrs={'class': 'c-offerBox is-hovered'}):
            product_link = product_div.findAll('a')[0].get_attribute_list('href')[0]
            product_page = get_full_page(web_driver, 'https://ccc.eu/' + product_link)

            product_name = product_page.find('meta', attrs={'property': 'og:title'}).get_attribute_list('content')[0]
            description = product_page.find('meta', attrs={'name': 'description'}).get_attribute_list('content')[0]
            image_link = product_page.find('meta', attrs={'property': 'og:image'}).get_attribute_list('content')[0]
            urllib.request.urlretrieve(image_link, f'./images/{product_id}.png')
            price_data = product_page.find('div', attrs={
                'class': 'c-layout v-product v-product_show is-esizeme_loaded is-esizeme_noscans'}).get_attribute_list(
                'data-product')[0]
            price = float(price_data.split("\"price\"")[1].split("\"priceOriginal\"")[0].split("\"")[1])
            price_netto = float(price_data.split("\"price\"")[1].split("\"priceOriginal\"")[0].split("\"")[5])
            sizes = []
            for size in product_page.findAll('a', attrs={'data-variant-group': 'Rozmiar: ', 'data-type': 'available'}):
                if len(size.getText().strip()) == 2:
                    sizes.append(int(size.getText().strip()))
            attributes_content = product_page.find('table', attrs={'class': 'c-table is-specification'})
            attributes = []
            for attribute in attributes_content.findAll('tr'):
                attr_name = attribute.findAll('td')[0].getText().strip()
                if attr_name in ['Marka', 'Model', 'Kod produktu', 'Kolor', 'Sezon', 'Materiał',
                                 'Wysokość całkowita buta', 'Metoda konserwacji',
                                 'Waga buta w gramach (najmniejszy rozmiar)', 'Styl', 'Wnętrze']:
                    attributes.append(attribute.findAll('td')[1].getText().strip().replace("\n", ""))
            products.append([link[1], product_name, price, price_netto, f'{product_id}.png', description,
                             sizes[:len(sizes) // 2]] + attributes)
            product_id += 1

    df = pd.DataFrame(products)
    df.to_csv('products.csv', index=False, encoding='utf-8', header=False, sep=';')


if __name__ == '__main__':
    driver = get_driver()
    page = get_full_page(driver, 'https://ccc.eu/pl/')
    links = get_links_and_make_categories(page)
    make_products(links, driver)
    driver.quit()
