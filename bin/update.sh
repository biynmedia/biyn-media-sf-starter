#!/bin/bash
composer install
yarn encore dev
php bin/console doctrine:schema:update --force
php bin/console hautelook:fixtures:load -q
sh ./bin/test.sh
