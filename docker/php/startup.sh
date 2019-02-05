#!/bin/bash

sed -i "s/xdebug\.remote_host\=.*/xdebug\.remote_host\=$XDEBUG_HOST/g" /usr/local/etc/php/conf.d/xdebug.ini

# Inserts the fresh user cronjobs into crontab
crontab /var/crons/crons

# start cron in the background
cron -f &

# php-fpm must be started in the foreground
php-fpm
