FROM lscr.io/linuxserver/code-server:latest

RUN apt update && \
    apt install -y php php-mysql php-curl php-fpm nginx && \
    apt install -y libapache2-mod-php php-mysql && \
    apt purge -y apache2

# Enable error reporting in php.ini
RUN sed -i 's/display_errors = Off/display_errors = On/' /etc/php/8.1/fpm/php.ini && \
    sed -i 's/error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT/error_reporting = E_ALL/' /etc/php/8.1/fpm/php.ini && \
    sed -i 's/display_startup_errors = Off/display_startup_errors = On/' /etc/php/8.1/fpm/php.ini && \
    sed -i 's/log_errors = Off/log_errors = On/' /etc/php/8.1/fpm/php.ini

RUN mkdir -p /config/workspace

COPY ./nginx.conf /etc/nginx/conf.d/app.conf

RUN chmod -R 755 /config/workspace

EXPOSE 80

CMD service php8.1-fpm start && nginx -g 'daemon off;'

