#!/usr/bin/env bash


# reference:
# http://stackoverflow.com/questions/11694980/using-sed-insert-a-line-below-or-above-the-pattern
# http://serverfault.com/questions/584607/changing-the-mysql-bind-address-within-a-script
# http://stackoverflow.com/questions/15184243/how-to-replace-values-in-ini-file-using-sed

# Set collation_server = utf8_general_ci in section [mysqld]
echo "Setting collation_server = utf8_general_ci in section [mysqld] ..."

sudo sed -i "/^\[mysqld\]/a \
    collation_server = utf8_general_ci" /etc/mysql/my.cnf

#if [ sudo sed -i.bak -e "/^\[mysqld\]/,/^\[.*\]/ s|^\(collation_server[ \t]*=[ \t]*\).*$|\1utf8_general_ci|" /etc/mysql/my.cnf ]; then

#if sudo bash -c 'sed -i.bak -e "/^\[mysqld\]/,/^\[.*\]/ s|^\(collation_server[ \t]*=[ \t]*\).*$|\1utf8_general_ci|" /etc/mysql/my.cnf'
#then
#
#	echo "Updated collation_server = utf8_general_ci in section [mysqld] ..."
#
#elif sudo bash -c 'sed -i "/^\[mysqld\]/a \
#    collation_server = utf8_general_ci" /etc/mysql/my.cnf'
#then
#
#	echo "Inserted collation_server = utf8_general_ci in section [mysqld] ..."
#fi

# Set character_set_server = utf8 in section [mysqld]
echo "Setting character_set_server = utf8 in section [mysqld] ..."

sudo sed -i "/^\[mysqld\]/a \
    character_set_server = utf8" /etc/mysql/my.cnf

# if [ sudo sed -i.bak -e "/^\[mysqld\]/,/^\[.*\]/ s|^\(character_set_server[ \t]*=[ \t]*\).*$|\1utf8|" /etc/mysql/my.cnf ]; then
# 
# 	echo "Updated character_set_server in section [mysqld] ..."
# 
# elif [ sudo sed -i "/^\[mysqld\]/a \
#     character_set_server = utf8" /etc/mysql/my.cnf ]; then
# 
# 	echo "Inserted character_set_server in section [mysqld] ..."
# fi

sudo service mysql restart
