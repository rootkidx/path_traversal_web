FROM php:8-apache

WORKDIR /var/www/html

COPY . .

CMD ["apache2-foreground"]
