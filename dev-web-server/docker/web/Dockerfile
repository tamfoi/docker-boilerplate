FROM httpd:alpine
RUN echo 'IncludeOptional conf.d/*.conf' >> /usr/local/apache2/conf/httpd.conf
RUN mkdir /usr/local/apache2/conf.d
COPY 000-firstinclude.conf /usr/local/apache2/conf.d/000-firstinclude.conf