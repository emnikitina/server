FROM debian:buster

RUN apt -y update && apt -y upgrade

#install all services
RUN apt -y install nginx default-mysql-server php7.3 php7.3-fpm php7.3-mysql wordpress vim openssl php7.3-json php7.3-mbstring 

#start services
COPY ./srcs/ft_server.sh /

#add script to create database mysql
COPY ./srcs/mysql_service.sql /

#configuration for nginx
COPY ./srcs/default /etc/nginx/sites-available/

#setting ssl certificate
COPY ./srcs/ssl_odomenic.crt /etc/ssl/certs/

COPY ./srcs/ssl_odomenic.key /etc/ssl/private/

#add script to switch autoindex
COPY ./srcs/switch_autoindex.sh /

#setting wordpress
RUN mv /usr/share/wordpress /var/www/html/wordpress/

COPY ./srcs/wp-config.php /var/www/html/wordpress/

RUN service mysql start && mysql < mysql_service.sql

RUN chown -R www-data /var/www/html

#dowload phpmyadmin
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz phpMyAdmin.tar.gz

RUN tar -zxvf phpMyAdmin.tar.gz 

RUN mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpMyAdmin/

#setting phpMyadmin
COPY ./srcs/config.inc.php /var/www/html/phpMyAdmin/

#to open ports
EXPOSE 80 443

ENTRYPOINT bash ft_server.sh
