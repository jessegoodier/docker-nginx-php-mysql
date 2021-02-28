FROM ubuntu:18.04
RUN apt update
RUN apt-get install -y software-properties-common
RUN add-apt-repository -y ppa:nginx/mainline
RUN add-apt-repository -y ppa:ondrej/php
RUN apt update
# RUN apt -y upgrade 
RUN apt -y install \
 nginx php7.4-fpm php7.4-mysql
# wget curl iputils-ping vim nano mysql-client #nice to have

RUN  mkdir -p /run/php/
 # Forward request logs to docker log collector
RUN ln -sf /dev/stdout /var/log/nginx/access.log \
 && ln -sf /dev/stderr /var/log/nginx/error.log \
 && ln -sf /dev/stderr /var/log/php7.4-fpm.log

EXPOSE 80
COPY entrypoint.sh entrypoint.sh
CMD ./entrypoint.sh
