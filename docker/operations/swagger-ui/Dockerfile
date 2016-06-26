FROM ubuntu

RUN apt-get update && apt-get upgrade -y
RUN apt-get install unzip -y

RUN mkdir -p /srv/www/swagger && mkdir -p /srv/www/tmp

ADD https://github.com/wordnik/swagger-ui/archive/master.zip /srv/www/tmp
RUN cd /srv/www/tmp && unzip master.zip && mv swagger-ui-master/dist/* /srv/www/swagger
RUN rm -rf /srv/www/tmp

ADD index.html /srv/www/swagger/index.html

VOLUME /srv/www/swagger