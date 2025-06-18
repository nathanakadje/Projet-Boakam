#!/bin/sh

# Création si inexistant
touch /etc/dokploy/traefik/acme.json
chmod 600 /etc/dokploy/traefik/acme.json

# Lancer traefik
exec traefik "$@"
