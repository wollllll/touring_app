FROM php:8.0-fpm
COPY php.ini /usr/local/etc/php/

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_HOME=/composer

COPY --from=composer:2.1 /usr/bin/composer /usr/bin/composer

RUN apt-get update \
  && apt-get install -y zlib1g-dev mariadb-client vim libzip-dev unzip \
  && docker-php-ext-install zip pdo_mysql

ENV PATH $PATH:/composer/vendor/bin

WORKDIR /var/www