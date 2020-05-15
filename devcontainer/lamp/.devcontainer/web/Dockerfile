FROM php:7-apache

#SSIを有効化する
COPY ssi.conf /etc/apache2/conf-enabled/ssi.conf

RUN apt-get update && \
  cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini; \
  docker-php-ext-install pdo_mysql;


