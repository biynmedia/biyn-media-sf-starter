#!/bin/bash
composer install
yarn install
yarn encore dev
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
php bin/console hautelook:fixtures:load -q
sh ./bin/test.sh