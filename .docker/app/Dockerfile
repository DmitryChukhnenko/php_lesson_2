FROM php:8.2-fpm

ARG DOCKER_ID=1000
ARG DOCKER_GID=1000

RUN groupadd -g $DOCKER_GID docker
RUN useradd -g $DOCKER_GID -u $DOCKER_GID docker

COPY .docker/app/docker-entrypoint.sh /docker-entrypoint.sh

USER docker

ENTRYPOINT /docker-entrypoint.sh