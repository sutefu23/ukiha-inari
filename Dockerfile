FROM wordpress:latest
RUN apt-get update
RUN apt-get -y install unzip

RUN chown -R www-data:www-data /var/www/html/cms/wp-content

ENV HOST 0.0.0.0
