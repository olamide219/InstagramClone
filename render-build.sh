#!/usr/bin/env bash

# Install PHP and composer dependencies
curl -sS https://getcomposer.org/installer | php
php composer.phar install --no-dev --optimize-autoloader

# Install Node.js dependencies and build assets
npm install
npm run build

# Cache Laravel configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache
