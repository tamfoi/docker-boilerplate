FROM php:7-apache

#SSIを有効化する
COPY ssi.conf /etc/apache2/conf-enabled/ssi.conf

# 自動インストールが止まるのを防ぐため入力待ちでブロックされないようにする
ENV DEBIAN_FRONTEND=noninteractive

# セットアップ
# 最小構成は下記
# https://code.visualstudio.com/docs/remote/containers-advanced#_reducing-dockerfile-build-warnings
RUN apt-get update \
  && apt-get -y install --no-install-recommends apt-utils dialog 2>&1 \
  && cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini \
  && docker-php-ext-install pdo_mysql

# ダイアログモードに戻す
ENV DEBIAN_FRONTEND=dialog
