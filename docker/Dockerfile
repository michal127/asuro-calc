FROM php:8.1-apache

WORKDIR /var/www

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions
RUN install-php-extensions iconv pcre session ctype tokenizer zip

CMD ["apache2-foreground"]

EXPOSE 80