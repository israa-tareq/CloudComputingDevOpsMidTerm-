
FROM php:8.4-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN a2enmod rewrite \
    && sed -ri -e "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/sites-available/*.conf \
    && printf '%s\n' \
       '<Directory /var/www/html/public>' \
       '    AllowOverride All' \
       '    Require all granted' \
       '</Directory>' \
       >> /etc/apache2/apache2.conf

WORKDIR /var/www/html

COPY . .

RUN composer install --no-interaction --prefer-dist --optimize-autoloader

RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80
