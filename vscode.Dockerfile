FROM lscr.io/linuxserver/code-server:latest

RUN apt update && \
    apt install -y php php-mysql php-curl php-fpm nginx && \
    apt install -y libapache2-mod-php php-mysql && \
    apt purge -y apache2

RUN mkdir -p /config/workspace

COPY ./nginx.conf /etc/nginx/conf.d/app.conf

RUN chmod -R 755 /config/workspace

EXPOSE 80

CMD service php8.1-fpm start && nginx -g 'daemon off;'
