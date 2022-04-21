FROM php:7.4-apache
RUN docker-php-ext-install mysqli


#FROM php:7.4-cli
#COPY . /usr/src/myapp
#WORKDIR /usr/src/myapp
#CMD [ "php", "./index.php" ]
#EXPOSE 4000
#from php:8.0.0-cli-alpine

#WORKDIR /usr/src/web

# copy project
#COPY . /usr/src/web/*/
