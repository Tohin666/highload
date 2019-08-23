FROM ubuntu:18.04

ENV DEBIAN_FRONTEND=noninteractive \
    TERM=xterm

RUN apt-get update && \
    apt-get install -y software-properties-common && \
    add-apt-repository -y ppa:nginx/stable && \
    apt-get update && \
    apt-get install -y nginx && \
    apt-get install -y nano && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN rm /etc/nginx/sites-enabled/default

ADD nginx.conf /etc/nginx/nginx.conf
ADD service.conf /etc/nginx/sites-enabled/service.conf

ENV STATIC_PATH=/var/www/html

EXPOSE 80
EXPOSE 443

VOLUME ${STATIC_PATH}

CMD ["nginx", "-g", "daemon off;"]
