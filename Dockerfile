# Stage 0:
# Build the assets that are needed for the frontend. This build stage is then discarded
# since we won't need NodeJS anymore in the future. This Docker image ships a final production
# level distribution of Pterodactyl.
FROM mhart/alpine-node:14

WORKDIR /app

# Install dependencies
COPY package.json yarn.lock .
RUN yarn install --frozen-lockfile

# Build assets
COPY . .
RUN yarn run build:production

# Stage 1:
# Build the actual container with all of the needed dependencies that will run the application.
FROM php:8.1-fpm-alpine

WORKDIR /app

# System dependencies
RUN apk add --no-cache --update ca-certificates dcron curl git supervisor tar unzip nginx libpng-dev libxml2-dev libzip-dev certbot certbot-nginx

# PHP dependencies
RUN docker-php-ext-install bcmath gd pdo_mysql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . .
COPY --from=0 /app/public/assets ./public/assets
RUN mkdir -p bootstrap/cache/ storage/logs storage/framework/sessions storage/framework/views storage/framework/cache \
    && composer install --no-dev --optimize-autoloader \
    && rm -rf bootstrap/cache/*.php \
    && chown -R nginx:nginx .

RUN echo "* * * * * /usr/local/bin/php /app/artisan schedule:run >> /dev/null 2>&1" >> /var/spool/cron/crontabs/root \
    && echo "0 23 * * * certbot renew --nginx --quiet" >> /var/spool/cron/crontabs/root \
    && sed -i s/ssl_session_cache/#ssl_session_cache/g /etc/nginx/nginx.conf \
    && mkdir -p /var/run/php /var/run/nginx

COPY --link .github/docker/default.conf /etc/nginx/http.d/default.conf
COPY --link .github/docker/www.conf /usr/local/etc/php-fpm.conf
COPY --link .github/docker/supervisord.conf /etc/supervisord.conf

EXPOSE 80 443
ENTRYPOINT [ "/bin/ash", ".github/docker/entrypoint.sh" ]
CMD [ "supervisord", "-n", "-c", "/etc/supervisord.conf" ]
