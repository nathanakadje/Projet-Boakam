# #!/bin/bash

# set -e

# # Attendre que la base soit disponible (Dokploy peut lancer le conteneur DB en retard)
# until pg_isready -h "$DB_HOST" -p "$DB_PORT" -U "$DB_USERNAME"; do
#   echo "Waiting for PostgreSQL..."
#   sleep 2
# done

# # Migrations et optimisation Laravel
# php artisan migrate --force
# php artisan config:cache
# php artisan route:cache
# php artisan view:cache

# # Créer un utilisateur admin (si commande idempotente)
# php artisan admin:create admin2@example.com Admin omega || true

# # Lancer Apache en foreground (important !)
# exec apache2-foreground


Fonctionne correctement modifier le 11/06/2025
#!/bin/bash

# Démarrer Apache
apache2-foreground &

sleep 10

# Exécuter les migrations
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Créer un utilisateur admin
php artisan admin:create admin2@example.com Admin nathan2

# Maintenir le processus en premier plan
wait
