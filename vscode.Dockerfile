FROM lscr.io/linuxserver/code-server:latest

RUN apt update && \
    apt install -y php php-mysql php-curl nginx && \
    apt install -y libapache2-mod-php php-mysql

RUN mkdir -p /config/workspace

COPY ./nginx.conf /etc/nginx/conf.d/app.conf

RUN ln -s /etc/nginx/sites-available/website /etc/nginx/sites-enabled/website

RUN chmod -R 755 /config/workspace

EXPOSE 80
