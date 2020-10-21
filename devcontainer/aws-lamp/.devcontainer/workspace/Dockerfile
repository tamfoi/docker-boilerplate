FROM amazonlinux:2

COPY httpd.conf /etc/httpd/conf.d/my.conf

RUN yum update -y \
  && yum -y install tar gzip

# Apache
RUN yum -y install httpd \
  && systemctl enable httpd

# MariaDB
RUN yum -y install mariadb-server \
  && systemctl enable mariadb

# PHP
RUN amazon-linux-extras install epel
RUN yum -y install epel-release
RUN rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN yum install -y php74 php74-php php74-php-mysqlnd
RUN ln -s /usr/bin/php74 /usr/bin/php
