FROM thura98/alpine-glibc
LABEL maintainer="myatminsoe@onenex.co"
ENV COMPOSER_ALLOW_SUPERUSER=1
# Setup document root
WORKDIR /var/www/html

RUN mkdir /var/lib/teleport

RUN apk add --no-cache \
  curl \
  nginx \
  php81 \
  php81-ctype \
  php81-curl \
  php81-dom \
  php81-fpm \
  php81-gd \
  php81-intl \
  php81-mbstring \
  php81-mysqli \
  php81-opcache \
  php81-openssl \
  php81-phar \
  php81-session \
  php81-xml \
  php81-xmlreader \
  php81-pdo \
  php81-fileinfo \
  php81-tokenizer \
  php81-xmlwriter \
  php81-xmlreader \
  php81-pdo_mysql \
  php81-pcntl\
  php81-posix\
  php81-simplexml\
  php81-iconv\
  php81-sodium\
  php81-redis\
  supervisor\
  git
# Require install
RUN apk add --no-cache php81-cli php81-common php81-mysqli php81-zip php81-gd php81-mbstring php81-curl php81-xml php81-bcmath

# Create symlink so programs depending on `php` still function
# RUN ln -s /usr/bin/php81 /usr/bin/php
RUN php -v

# Configure nginx
COPY ./docker-config/nginx.conf /etc/nginx/nginx.conf

# Configure PHP-FPM
COPY  ./docker-config/fpm-pool.conf /etc/php81/php-fpm.d/www.conf
COPY ./docker-config/php.ini /etc/php81/conf.d/custom.ini

# Configure crontab
# COPY ./docker-config/cronfile /etc/cron.d/cronfile
# RUN chmod 0644 /etc/cron.d/cronfile
# RUN crontab /etc/cron.d/cronfile

# Configure supervisord
#COPY ./docker-config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY ./docker-config/supervisord.conf /etc/supervisord.conf

#COPY env.gitlab /var/www/html/.env

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
# # Switch to use root user from here on
USER root

# set onenex user to onenex group

RUN  addgroup -S onenex
RUN  adduser -D -G onenex onenex && exit 0; exit 1
RUN  addgroup onenex root

COPY . /var/www/html/
RUN mv .env.example .env


#Update composer update
RUN composer update
RUN composer install

RUN chown -R onenex:onenex /var/www/html /run /var/lib/nginx /var/log/nginx

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]

