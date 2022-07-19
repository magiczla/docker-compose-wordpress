FROM nginx:stable-alpine

# ADD ./nginx/default.conf /etc/nginx/conf.d/default.conf
# ADD ./nginx/certs /etc/nginx/certs/self-signed

RUN apk update && apk add certbot

RUN mkdir -p /var/www/html
