FROM php:8.2-fpm-alpine

# Основные зависимости
RUN docker-php-ext-configure opcache --enable-opcache && \
    apk update && apk add bash unzip git

RUN apk update && apk add --no-cache \
    libzip-dev \
    zip \
    unzip \
    openssl-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    curl \
    git \
    mysql-client \
    mysql-dev

RUN docker-php-ext-install pdo pdo_mysql zip gd exif

ENV COMPOSER_VERSION 2.0.12
ENV COMPOSER_HOME /tmp
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN set -xe \
    && mkdir -p "$COMPOSER_HOME" \
    && php -r "copy('https://getcomposer.org/installer', '/tmp/composer-setup.php');" \
    && php /tmp/composer-setup.php --no-ansi --install-dir=/usr/bin --filename=composer --version=$COMPOSER_VERSION \
    && composer --ansi --version --no-interaction \
    && composer clear-cache \
    && rm -rf /tmp/composer-setup.php /tmp/.htaccess

WORKDIR /var/www/html
COPY . /var/www/html/

RUN composer self-update \
    && composer install \
        --no-ansi \
        --no-interaction \
        --no-scripts \
        --no-progress \
        --prefer-dist \
        --optimize-autoloader

# Создание папок в storage если они отсутствуют
RUN mkdir -p storage/framework storage/framework/cache storage/framework/cache/data storage/framework/sessions storage/framework/views
RUN chmod -R 777 storage bootstrap/cache

EXPOSE 9000
