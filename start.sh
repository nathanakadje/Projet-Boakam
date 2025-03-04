#!/bin/bash

# Exécuter les migrations
php artisan migrate --force

# Démarrer Apache
apache2-foreground
