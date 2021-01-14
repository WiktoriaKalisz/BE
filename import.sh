#!/bin/bash

mysql -p"dev" < skrypt.sql
mysql -u "user_1" -p"ad123min" "db_1" < dump.sql