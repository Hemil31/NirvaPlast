# -------------------------------------------------------------
# Stage 1: Install PHP dependencies
# -------------------------------------------------------------
FROM composer:2 AS vendor

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install \
        --no-dev \
        --no-scripts \
        --no-autoloader \
        --no-interaction \
        --no-progress \
        --prefer-dist

COPY . .

RUN composer dump-autoload \
        --no-dev \
        --no-scripts \
        --optimize \
        --classmap-authoritative

# -------------------------------------------------------------
# Stage 2: Runtime image (Nginx + PHP-FPM + Supervisor)
# -------------------------------------------------------------
FROM php:8.4-fpm-alpine

RUN apk add --no-cache \
        nginx \
        supervisor \
        curl \
        bash \
        unzip \
        gettext \
        freetype \
        libpng \
        libjpeg-turbo \
        icu-libs \
        libzip \
        oniguruma \
        libxml2 \
    && apk add --no-cache --virtual .build-deps \
        freetype-dev \
        libjpeg-turbo-dev \
        libpng-dev \
        icu-dev \
        libzip-dev \
        oniguruma-dev \
        libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" \
        pdo_mysql \
        bcmath \
        intl \
        zip \
        opcache \
        gd \
    && apk del .build-deps \
    && rm -rf /var/cache/apk/*

WORKDIR /app

COPY --from=vendor /app .

COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/supervisord.conf /etc/supervisord.conf
COPY docker/php.ini /usr/local/etc/php/conf.d/zz-app.ini
COPY scripts/start.sh /app/scripts/start.sh

RUN php artisan package:discover --ansi \
    && chmod +x /app/scripts/start.sh \
    && chown -R www-data:www-data /app/storage /app/bootstrap/cache \
    && chmod -R ug+rw /app/storage /app/bootstrap/cache

EXPOSE 80

CMD ["/app/scripts/start.sh"]