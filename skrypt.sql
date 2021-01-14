create database db_1;
CREATE USER 'user_1'@'localhost' IDENTIFIED BY 'ad123min';
CREATE USER 'user_1'@'%' IDENTIFIED BY 'ad123min';
GRANT ALL ON *.* TO 'user_1'@'localhost';
GRANT ALL ON *.* TO 'user_1'@'%';
flush privileges;
