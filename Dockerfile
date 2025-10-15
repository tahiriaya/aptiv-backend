FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    default-mysql-client \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy composer files
COPY composer.json composer.lock ./

# Install dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

# Copy application files
COPY . .

# Create required directories and set permissions
RUN mkdir -p storage/framework/{sessions,views,cache} \
    && mkdir -p storage/logs \
    && mkdir -p bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache

# DON'T copy .env - Render uses environment variables
# DON'T generate key during build - use APP_KEY env variable instead

# Expose port dynamically (Render uses $PORT variable, usually 10000)
EXPOSE ${PORT:-10000}

# Create startup script
RUN echo '#!/bin/bash\n\
set -e\n\
echo "🚀 Starting Laravel application..."\n\
\n\
# Start server IMMEDIATELY in background (Render needs open port within 60s)\n\
php artisan serve --host=0.0.0.0 --port=${PORT:-10000} &\n\
SERVER_PID=$!\n\
\n\
# Wait for server to start\n\
sleep 3\n\
\n\
# Run optimizations in background while server is running\n\
echo "📦 Running optimizations..."\n\
(php artisan config:cache || true) &\n\
(php artisan route:cache || true) &\n\
(php artisan view:cache || true) &\n\
\n\
# Wait a bit for cache commands\n\
sleep 2\n\
\n\
# Run migrations (non-blocking)\n\
echo "🗄️  Running migrations..."\n\
php artisan migrate --force || echo "⚠️  Migrations failed"\n\
\n\
echo "✅ Application ready on port ${PORT:-10000}"\n\
\n\
# Keep server running in foreground\n\
wait $SERVER_PID\n\
' > /start.sh && chmod +x /start.sh

# Start application with the script
CMD ["/start.sh"]