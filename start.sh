#!/bin/sh

# Ждём, пока MySQL будет готов
echo "Waiting for MySQL..."
while ! mysqladmin ping -h"$DB_HOST" --silent; do
    sleep 2
done

# Запускаем миграции
php artisan migrate --force

# Запускаем сервер
exec php -S 0.0.0.0:80 -t public
