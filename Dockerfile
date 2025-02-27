FROM php:7.3.8-apache
# We could use `httpd:2.4`, as we don't need PHP right now, but the config files
# in that image are in a different place. This is easier in the long run.
# This is a docker image for PHP

LABEL maintainer="Arpita Bali"

COPY ./app /srv/app
# Copy my app folder to /srv/app

# The destination directory will need to change, based on the image,
# because the config files are put in different places in different images
COPY docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf
