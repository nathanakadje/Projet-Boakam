# Configuration pour le Web Service sur Render.com


# Créer un Dockerfile à la racine de votre projet
FROM php:8.2-apache

# Installation des dépendances
RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip \
    unzip \
    git

# Installation des extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_pgsql

# Installation de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configuration d'Apache
RUN a2enmod rewrite
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Configuration du répertoire de travail
WORKDIR /var/www/html

# Copie des fichiers du projet
COPY . .

# Installation des dépendances
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Variables d'environnement
ENV APP_ENV=production
ENV APP_DEBUG=false

# Port
EXPOSE 80

# Commande de démarrage
CMD ["apache2-foreground"]

