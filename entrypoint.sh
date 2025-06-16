#!/bin/sh

# Création si inexistant
touch /etc/traefik/acme.json

# Appliquer les bonnes permissions
chmod 600 /etc/traefik/acme.json

# Lancer traefik
exec traefik "$@"
