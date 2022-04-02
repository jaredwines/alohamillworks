FROM ubuntu as base

#Update and install required libraries.
ARG DEBIAN_FRONTEND=noninteractive
ENV TZ=Europe/Moscow

RUN apt-get update && apt-get install -y software-properties-common python3 imagemagick
RUN add-apt-repository -y ppa:ondrej/php
RUN apt-get install -y php8.0
RUN /bin/bash


WORKDIR /usr/src/alohamillworks
COPY . /usr/src/alohamillworks
ENV PYTHONPATH /usr/src/alohamillworks
RUN python3 /usr/src/alohamillworks/thumbnail-creater.py /usr/src/alohamillworks/src/asset/img/gallery 500


WORKDIR /usr/src/alohamillworks/src
EXPOSE 8009
CMD ["php", "-S", "0.0.0.0:8009"]
