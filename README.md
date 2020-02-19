# Wordmove Example 🚀

## Dependences
- Wordmove (https://github.com/welaika/wordmove)
- Docker (https://www.docker.com/products/docker-desktop)
- Composer (https://getcomposer.org)
- Gulp (https://gulpjs.com)

## Setup
1. `$ ./init.sh` runs all commands in step by step setup
1. Open `http://localhost:8080` for app
1. Open `http://localhost:8000` for phpMyAdmin
1. Admin login at `http://localhost:8080/admin` with username `admin` and password `admin`

## Setup Step by Step
1. `$ cd public_html`
1. `$ composer install`
1. `$ cp .env.example .env`
1. `$ cp wp-config-sample.php wp-config.php`
1. `$ cd wp-content/themes/template/src`
1. `$ npm run build`
1. `$ cd ../../../../..`
1. `$ docker-compose up`
