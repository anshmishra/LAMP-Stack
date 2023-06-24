FROM php:apache

RUN docker-php-ext-install mysqli

CMD ["apache2-foreground"]
