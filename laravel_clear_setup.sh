#!/bin/bash

echo "start clean up app"

php artisan config:clear
php artisan cache:clear
composer dump-autoload
php artisan view:clear
php artisan route:clear
