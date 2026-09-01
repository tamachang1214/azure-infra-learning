FROM php:8.4-fpm

WORKDIR /var/www/html

COPY app/ /var/www/html/