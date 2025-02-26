# # Configuration pour le Web Service sur Render.com


# # Créer un Dockerfile à la racine de votre projet
# FROM php:8.2-apache

# #FROM php:8.2-fpm

# # Installer les dépendances système
# RUN apt-get update && apt-get install -y \
#     libpq-dev \
#     libzip-dev \
#     unzip \
#     git \
#     curl \
#     && docker-php-ext-install pdo_pgsql zip
    
# # Activer le module Apache mod_rewrite
# RUN a2enmod rewrite
# # Copier les fichiers du projet dans l'image
# # Définir le répertoire de travail
# WORKDIR /var/www/html
# COPY . .
# # Installer Composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Installer Node.js pour compiler les assets front-end
# RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - && apt-get install -y nodejs

# # Installer les dépendances de Laravel
# RUN composer install

# # Donner les permissions nécessaires
# RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# # Exposer le port
# EXPOSE 8000

# # Commande pour démarrer Laravel

# CMD ["apache2-foreground"]
# Dockerfile
FROM php:8.2-cli

# Installation des dépendances système
RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip \
    unzip \
    git

# Installation des extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_pgsql

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définition du répertoire de travail
WORKDIR /var/www/html

# Copie des fichiers de l'application
COPY . .

# Installation des dépendances PHP
RUN composer install

# Génération de la clé d'application
#RUN php artisan key:generate

# Permissions des dossiers de cache et stockage
RUN chmod -R 775 storage bootstrap/cache && \
    chown -R www-data:www-data storage bootstrap/cache
    
# Exposition du port
EXPOSE 8000

# Commande pour démarrer le serveur
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000
