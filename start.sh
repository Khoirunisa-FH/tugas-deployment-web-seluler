#!/bin/sh
set -e

# 1. Pastikan hanya prefork yang aktif (anti error AH00534)
a2dismod mpm_event mpm_worker >/dev/null 2>&1 || true
rm -f /etc/apache2/mods-enabled/mpm_event.* /etc/apache2/mods-enabled/mpm_worker.*
a2enmod mpm_prefork >/dev/null 2>&1 || true

# 2. Pakai port dari Railway
sed -i "s/^Listen 80$/Listen ${PORT:-80}/" /etc/apache2/ports.conf
sed -i "s/<VirtualHost \*:[0-9]*>/<VirtualHost *:${PORT:-80}>/" /etc/apache2/sites-available/000-default.conf

# 3. Siapkan Laravel
php artisan migrate --force || true
php artisan db:seed --force || true
php artisan config:cache || true

# 4. Jalankan Apache
exec apache2-foreground