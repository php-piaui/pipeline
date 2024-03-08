#!/bin/bash

php -r "file_exists('.env') || copy('.env.example', '.env');"

composer update

php artisan key:generate

touch database/database.sqlite

php artisan migrate
