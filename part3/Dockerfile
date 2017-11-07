# Source: https://mhdzaherghaibeh.name/2017/01/18/how-to-install-external-php-modules-in-docker/
FROM php:5.6-alpine

# docker-php-ext... needed to install external PHP modules in docker images
RUN apk --update --upgrade add build-base 
RUN \
		apk add postgresql postgresql-dev php5-pgsql \
		&& docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
		&& docker-php-ext-install pgsql

WORKDIR /app

# sets the server up inside docker-machine
ENTRYPOINT ["php"]
CMD ["-S", "0.0.0.0:3000"]

EXPOSE 3000
