#!/bin/sh
set -e

echo "Starting Nirva-Plast..."

mkdir -p /app/bootstrap/cache /app/storage/logs \
    /app/storage/framework/cache/data /app/storage/framework/sessions \
    /app/storage/framework/views

chown -R www-data:www-data /app/storage /app/bootstrap/cache
chmod -R ug+rw /app/storage /app/bootstrap/cache

# Storage symlink for uploaded files (public/storage)
php artisan storage:link --force 2>/dev/null || true

# Cache config & views (routes use closures, so no route:cache)
php artisan config:cache --no-interaction 2>/dev/null || true
php artisan view:cache --no-interaction 2>/dev/null || true

# Wait for the database and run migrations
echo "Waiting for database connection..."
n=0
until php artisan migrate --force --no-interaction 2>/tmp/migrate.log; do
    n=$((n + 1))
    if [ "$n" -ge 20 ]; then
        echo "Migrations not completed after 20 attempts. Error tail:"
        tail -5 /tmp/migrate.log
        break
    fi
    echo "  Database not ready, retry $n/20..."
    sleep 5
done

# Render nginx config with the Railway-provided PORT
export PORT="${PORT:-80}"
envsubst '${PORT}' < /etc/nginx/nginx.conf > /tmp/nginx.conf && mv /tmp/nginx.conf /etc/nginx/nginx.conf

echo "Nirva-Plast is serving on port $PORT"
exec supervisord -c /etc/supervisord.conf