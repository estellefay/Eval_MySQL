#!/bin/bash 
# create user 
sudo su
mysql --database=mysql -e "CREATE USER 'estelle'@'localhost' IDENTIFIED BY 'mypass';"
mysql --database=mysql -e "CREATE USER 'estelle'@'%' IDENTIFIED BY 'mypass';"

mysql --database=mysql -e "GRANT ALL ON *.* TO 'estelle'@'localhost';"
mysql --database=mysql -e "GRANT ALL ON *.* TO 'estelle'@'%';"

