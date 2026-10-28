FROM php:8.4-apache
 
WORKDIR /var/www/html
 
RUN docker-php-ext-install pdo
 
RUN a2enmod rewrite
 
COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf
 
EXPOSE 80
 
CMD ["apache2-foreground"]