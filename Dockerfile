FROM dunglas/frankenphp:php8.4-alpine

WORKDIR /app

RUN apk add --no-cache postgresql-client libpq-dev \
    && install-php-extensions pdo pdo_pgsql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN mkdir -p bootstrap/cache storage/logs storage/framework/cache storage/framework/sessions storage/framework/views \
    && chmod -R 775 bootstrap/cache storage \
    && composer install --no-dev --optimize-autoloader

EXPOSE 8000

CMD ["sh", "-c", "php artisan migrate --force && php artisan l5-swagger:generate && frankenphp php-server --listen=0.0.0.0:${PORT:-8000} --root=public"]