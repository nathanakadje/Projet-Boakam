#!/bin/bash

# Démarrer Apache
apache2-foreground &

sleep 10

# Exécuter les migrations
php artisan migrate --force


# Créer un utilisateur admin
php artisan admin:create admin2@example.com Admin nathan2

# Maintenir le processus en premier plan
wait