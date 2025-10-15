#!/usr/bin/env bash
# build.sh

# Sortir en cas d'erreur
set -o errexit

# Installer les dépendances Composer
composer install --no-dev --optimize-autoloader

# Installer les dépendances NPM (si nécessaire)
# npm install
# npm run build

# Générer la clé d'application
php artisan key:generate --force

# Exécuter les migrations
php artisan migrate --force

# Optimiser Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache