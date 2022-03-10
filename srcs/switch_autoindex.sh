#!/bin/bash

if grep 'autoindex on;' /etc/nginx/sites-available/default
then
	sed -i 's/autoindex on;/autoindex off;/' /etc/nginx/sites-available/default
	nginx -s reload
elif grep 'autoindex off;' /etc/nginx/sites-available/default
then
	sed -i 's/autoindex off;/autoindex on;/' /etc/nginx/sites-available/default
	nginx -s reload
fi
