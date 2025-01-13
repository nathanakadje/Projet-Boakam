# Configuration pour le Web Service sur Render.com


# Créer un Dockerfile à la racine de votre projet
FROM php:8.2-apache

#FROM php:8.2-fpm

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo_pgsql zip

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer Node.js pour compiler les assets front-end
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - && apt-get install -y nodejs

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers du projet dans l'image
COPY . .

# Installer les dépendances de Laravel
RUN composer install --optimize-autoloader --no-dev


# Donner les permissions nécessaires
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exposer le port
EXPOSE 10000

# Commande pour démarrer Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
