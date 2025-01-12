# Configuration pour le Web Service sur Render.com


# Créer un Dockerfile à la racine de votre projet
FROM php:8.2-apache

#FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo_pgsql zip

WORKDIR /var/www/html

COPY . .

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
