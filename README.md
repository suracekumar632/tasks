magento installation steps:

sudo systemctl enable apache2.service

sudo nano /etc/apache2/sites-available/magento2.conf

<VirtualHost *:80>
	ServerAdmin webmaster@localhost
	DocumentRoot /var/www/html
	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName magento2.com
    DocumentRoot /var/www/html/magento2/pub
</VirtualHost>

db create :

sudo mysql -u root -p
Create a new database for Magento 2:
CREATE DATABASE magento2
CREATE USER 'mageplaza'@'localhost' IDENTIFIED BY 'YOUR_PASSWORD';
GRANT ALL ON magento2.* TO 'mageplaza'@'localhost' IDENTIFIED BY 'YOUR_PASSWORD' WITH GRANT OPTION;

magento project create command:

composer create-project –repository-url=https://repo.magento.com/ magento/project-community-edition=2.4.6 magento2

connection command :
php bin/magento setup:install --base-url=http://localhost/magento2/ --db-host=127.0.0.1 --db-name=magento2 --db-user=mageplaza --db-password=Trio@123 --admin-firstname=admin --admin-lastname=admin --admin-email=admin@admin.com --admin-user=admin --admin-password=admin123 --language=en_US --currency=USD --timezone=America/Chicago --use-rewrites=1 --backend-frontname=admin --search-engine=elasticsearch7
 
veriosns:
php 8.1
ubuntu os
