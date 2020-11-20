# coding=utf-8
# encoding=utf-8
import io

from prestapyt import PrestaShopWebServiceDict
from pandas.hashtable import nan
import pandas as pd


def import_categories(categories, prestashop):
    data_schema = prestashop.get('categories?schema=blank')
    cat_id = 3
    last_main_id = 0
    last_cat_id = 0
    for category in categories:
        if category[1] is nan:
            parent_id = 2
            last_main_id = cat_id
            name = category[0]
        elif category[2] is nan:
            parent_id = last_main_id
            last_cat_id = cat_id
            name = category[1]
        else:
            parent_id = last_cat_id
            name = category[2]
        data_schema['category'].update({'date_add': '',
                                        'link_rewrite': {'language': {'attrs': {'id': '1'},
                                                                      'value': unicode(name.encode('utf8').lower()
                                                                                       .replace(" ", "-")
                                                                                       .replace("ą", "a")
                                                                                       .replace("ć", "c")
                                                                                       .replace("ę", "e")
                                                                                       .replace("ł", "l")
                                                                                       .replace("ń", "n")
                                                                                       .replace("ó", "o")
                                                                                       .replace("ż", "z")
                                                                                       .replace("ź", "z")
                                                                                       .replace("ś", "s")
                                                                                       .replace("ą", "a"),
                                                                                       'utf8')}},
                                        'meta_title': {'language': {'attrs': {'id': '1'},
                                                                    'value': unicode(name.encode('utf8'), 'utf8')}},
                                        'meta_keywords': {'language': {'attrs': {'id': '1'},
                                                                       'value': ''}},
                                        'name': {'language': {'attrs': {'id': '1'},
                                                              'value': unicode(name.encode('utf8'), 'utf8')}},
                                        'date_upd': '',
                                        'id_parent': str(parent_id),
                                        'is_root_category': '0',
                                        'id_shop_default': '1',
                                        'active': '1',
                                        'position': '0',
                                        'meta_description': {'language': {'attrs': {'id': '1'}, 'value': ''}},
                                        'description': {'language': {'attrs': {'id': '1'}, 'value': ''}}})
        prestashop.add('categories', data_schema)
        cat_id += 1


def change_quantity(product_id, prestashop):
    product = prestashop.get('products', product_id)
    stocks = product['product']['associations']['stock_availables']['stock_available']
    if type(stocks) == list:
        for stock in stocks:
            stock_id = stock['id']
            stock = prestashop.get('stock_availables', int(stock_id))
            stock['stock_available']['quantity'] = str(20)
            prestashop.edit('stock_availables', stock)


def add_sizes(prestashop, sizes, product_id):
    first = 1
    sizes = sizes[1:]
    sizes = sizes[:-1]
    sizes = sizes.split(',')
    if sizes[0] != '':
        for size in sizes:
            size = int(size)-13
            combination_schema = prestashop.get('combinations?schema=blank')
            combination_schema['combination'].update({'associations': {'images': {'image': {'id': ''}},
                                                                       'product_option_values': {
                                                                           'product_option_value': {'id': size}}},
                                                      'minimal_quantity': 1,
                                                      'default_on': first,
                                                      'available_date': '0000-00-00',
                                                      'id_product': product_id})
            api.add('combinations', combination_schema)
            first = 0


def add_image(product_id, prestashop, image_name):
    fd = io.open('images/'+image_name, 'rb')
    content = fd.read()
    fd.close()
    return prestashop.add('images/products/'+str(product_id), files=[('image', 'images/'+image_name, content)])


def add_features(prestashop, features, product_id):
    pfv_schema = prestashop.get('product_feature_values?schema=blank')
    pfv_schema['product_feature_value'].update({'id_feature': '1',
                                                 'value': {'language': {'attrs': {'id': '1'}, 'value': features[11]}}})
    prestashop.add('product_feature_values', pfv_schema)
    pfv_schema['product_feature_value'].update({'id_feature': '2',
                                                'value': {'language': {'attrs': {'id': '1'}, 'value': features[12]}}})
    prestashop.add('product_feature_values', pfv_schema)
    pfv_schema['product_feature_value'].update({'id_feature': '3',
                                                'value': {'language': {'attrs': {'id': '1'}, 'value': features[7]}}})
    prestashop.add('product_feature_values', pfv_schema)
    pfv_schema['product_feature_value'].update({'id_feature': '4',
                                                'value': {'language': {'attrs': {'id': '1'}, 'value': features[8]}}})
    prestashop.add('product_feature_values', pfv_schema)
    pfv_schema['product_feature_value'].update({'id_feature': '5',
                                                'value': {'language': {'attrs': {'id': '1'}, 'value': features[9]}}})
    prestashop.add('product_feature_values', pfv_schema)
    pfv_schema['product_feature_value'].update({'id_feature': '6',
                                                'value': {'language': {'attrs': {'id': '1'}, 'value': features[10]}}})
    prestashop.add('product_feature_values', pfv_schema)
    pfv_schema['product_feature_value'].update({'id_feature': '7',
                                                'value': {'language': {'attrs': {'id': '1'}, 'value': features[13]}}})
    prestashop.add('product_feature_values', pfv_schema)
    pfv_schema['product_feature_value'].update({'id_feature': '8',
                                                'value': {'language': {'attrs': {'id': '1'}, 'value': features[14]}}})
    prestashop.add('product_feature_values', pfv_schema)
    pfv_schema['product_feature_value'].update({'id_feature': '9',
                                                'value': {'language': {'attrs': {'id': '1'}, 'value': features[15]}}})
    prestashop.add('product_feature_values', pfv_schema)
    pfv_schema['product_feature_value'].update({'id_feature': '10',
                                                'value': {'language': {'attrs': {'id': '1'}, 'value': features[16]}}})
    prestashop.add('product_feature_values', pfv_schema)
    pfv_schema['product_feature_value'].update({'id_feature': '11',
                                                'value': {'language': {'attrs': {'id': '1'}, 'value': features[17]}}})
    res = prestashop.add('product_feature_values', pfv_schema)['prestashop']['product_feature_value']['id']
    product = api.get('products', product_id)
    product['product']['associations']['product_features']['product_feature'] = [{'id': '1', 'id_feature_value': int(res)-10},
                                                                                 {'id': '2', 'id_feature_value': int(res)-9},
                                                                                 {'id': '3', 'id_feature_value': int(res)-8},
                                                                                 {'id': '4', 'id_feature_value': int(res)-7},
                                                                                 {'id': '5', 'id_feature_value': int(res)-6},
                                                                                 {'id': '6', 'id_feature_value': int(res)-5},
                                                                                 {'id': '7', 'id_feature_value': int(res)-4},
                                                                                 {'id': '8', 'id_feature_value': int(res)-3},
                                                                                 {'id': '9', 'id_feature_value': int(res)-2},
                                                                                 {'id': '10', 'id_feature_value': int(res)-1},
                                                                                 {'id': '11', 'id_feature_value': res}]
    del product['product']['manufacturer_name']
    del product['product']['quantity']
    prestashop.edit('products', product)


def import_products(products, prestashop):

    prod_id = 1
    for product in products:
        if type(product[17]) == unicode and len(product[15]) < 5 and type(product[5]) == unicode:
            data_schema = prestashop.get('products?schema=blank')
            data_schema['product'].update({'date_add': '',
                                         'ean13': '',
                                         'id_default_image': '',
                                         'advanced_stock_management': '0',
                                         'cache_has_attachments': '1',
                                         'reference': '',
                                         'available_for_order': '1',
                                         'wholesale_price': '0',
                                         'meta_title': {'language': {'attrs': {'id': '1'}, 'value': unicode(product[1].encode('utf8'), 'utf8')}},
                                         'id_category_default': str(product[0]+2),
                                         'position_in_category': '0',
                                         'meta_keywords': {'language': {'attrs': {'id': '1'}, 'value': ''}},
                                         'meta_description': {'language': {'attrs': {'id': '1'}, 'value': ''}},
                                         'id_supplier': '',
                                         'id_manufacturer': '',
                                         'additional_shipping_cost': '0',
                                         'weight': '0',
                                         'quantity_discount': '0',
                                         'show_price': '1',
                                         'on_sale': '0',
                                         'unity': '',
                                         'is_virtual': '0',
                                         'uploadable_files': '0',
                                         'width': '0',
                                         'redirect_type': '',
                                         'id_tax_rules_group': '1',
                                         'location': '',
                                         'indexed': '1',
                                         'new': '',
                                         'type': 'simple',
                                         'unit_price_ratio': '0',
                                         'cache_default_attribute': '0',
                                         'link_rewrite': {'language': {'attrs': {'id': '1'}, 'value': ''}},
                                         'description': {'language': {'attrs': {'id': '1'}, 'value': unicode(product[5].encode('utf8'), 'utf8')}},
                                         'available_now': {'language': {'attrs': {'id': '1'}, 'value': ''}},
                                         'date_upd': '',
                                         'price': str(product[3]),
                                         'minimal_quantity': '1',
                                         'visibility': 'both',
                                         'available_date': '0000-00-00',
                                         'id_shop_default': '1',
                                         'active': '1',
                                         'supplier_reference': '',
                                         'height': '0',
                                         'condition': 'new',
                                         'ecotax': '0',
                                         'name': {'language': {'attrs': {'id': '1'}, 'value': unicode(product[1].encode('utf8'), 'utf8')}},
                                         'customizable': '0',
                                         'description_short': {'language': {'attrs': {'id': '1'}, 'value': ''}},
                                         'text_fields': '0',
                                         'upc': '',
                                         'online_only': '0',
                                         'depth': '0',
                                         'pack_stock_type': '3',
                                         'associations': {'combinations': '',
                                                          'accessories': '',
                                                          'product_bundle': '',
                                                          'tags': '',
                                                          'stock_availables': {'stock_available': {'id_product_attribute': '0'}},
                                                          'product_option_values': '',
                                                          'categories': {'category': {'id': str(product[0]+2)}},
                                                          'product_features': {'product_feature': {'id': '', 'id_feature_value': ''}}},
                                         'cache_is_pack': '0',
                                         'available_later': {'language': {'attrs': {'id': '1'}, 'value': ''}},
                                         'id_default_combination': ''})
            prestashop.add('products', data_schema)
            add_image(prod_id, prestashop, product[4].encode('utf8'))
            add_sizes(prestashop, product[6], prod_id)
            change_quantity(prod_id, prestashop)
            add_features(prestashop, product, prod_id)
            prod_id += 1


if __name__ == '__main__':
    api = PrestaShopWebServiceDict('http://localhost/prestashop/api', 'FXZ7H2NRVH24PB2HH9NGTDD7C92KSFHE')

    df = pd.read_csv('categories.csv', header=None, encoding='utf8')
    df = [list(row) for row in df.values]
    import_categories(df, api)

    df = pd.read_csv('products.csv', header=None, encoding='utf8', sep=';')
    df = [list(row) for row in df.values]
    import_products(df, api)
