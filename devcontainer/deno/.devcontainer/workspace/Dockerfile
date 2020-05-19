FROM ubuntu:20.04

# 自動インストールが止まるのを防ぐため入力待ちでブロックされないようにする
ENV DEBIAN_FRONTEND=noninteractive

# セットアップ
# 最小構成は下記
# https://code.visualstudio.com/docs/remote/containers-advanced#_reducing-dockerfile-build-warnings
RUN apt-get update \
  && apt-get -y install --no-install-recommends apt-utils dialog 2>&1 \
  && apt-get -y install curl unzip \
  && curl -fsSL https://deno.land/x/install/install.sh | sh

ENV PATH $PATH:$PATH:~/.deno/bin/

# ダイアログモードに戻す
ENV DEBIAN_FRONTEND=dialog
