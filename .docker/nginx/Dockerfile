FROM nginx:1.20-alpine
COPY .docker/nginx/default.conf /etc/nginx/conf.d/default.conf

ENV TZ=Asia/Tokyo

# todo 何をインストールしたらいいか調査
RUN apk update && \
  apk add --update --no-cache --virtual=.build-dependencies g++

WORKDIR /var/www