FROM php:7.2-apache
RUN docker-php-ext-install mysqli pdo_mysql && docker-php-ext-enable mysqli

COPY . /var/www/html/

EXPOSE 80