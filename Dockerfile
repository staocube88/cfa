FROM nginx:1.15.8-alpine

#COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./* /usr/share/nginx/html
#COPY src/* /usr/share/nginx/html
#COPY src/css/*.css /usr/share/nginx/html
#COPY src/images/*.png /usr/share/nginx/html
#COPY src/images/*.jpg /usr/share/nginx/html
#COPY src/js/*.js /usr/share/nginx/html
#COPY src/fonts/* /usr/share/nginx/html
#COPY src/scss/*.scss /usr/share/nginx/html



#FROM php:7.4-cli
#COPY . /usr/src/myapp
#WORKDIR /usr/src/myapp
#CMD [ "php", "./index.php" ]
#EXPOSE 4000
#from php:8.0.0-cli-alpine

#WORKDIR /usr/src/web

# copy project
#COPY . /usr/src/web/*/
