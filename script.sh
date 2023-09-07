#!/bin/bash

docker compose up -d

npm run build

php artisan serve