#!/bin/sh

cd ./public_html && composer install
echo "👍  Composer installed"

cp .env.example .env
echo "👍  .env created from sample"

cp wp-config-sample.php wp-config.php
echo "👍  wp-config.php created from sample"

cd wp-content/themes/template/src && npm install
echo "👍  NPM packages installed"

gulp build
echo "👍  gulp build done"

echo "🐳  Starting Docker"
cd ../../../../.. && docker-compose up
