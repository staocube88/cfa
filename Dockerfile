FROM php:7.4-apache
COPY . /usr/src/cfa
WORKDIR /usr/src/cfa
CMD [ "php", "./index.php" ]

#EXPOSE 4000
#from php:8.0.0-cli-alpine

#WORKDIR /usr/src/web

# copy project
#COPY . /usr/src/web/*/
