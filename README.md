## BIodata

Nama :Fitra Maulana Pratama
Npm :5520120109

## Fitur yang ada

1. Read Data Buku
2. Create Data Buku
3. Update Data Buku
4. Delete Data Buku
5. SweetAlert
6. Print to PDF
7. Export/Import File
8. Sudah terhubung dengan Rest API

## Install

npm install
composer install

## Fix if php error

composer self-update
composer clear-cache
rm -rf vendor
rm composer.lock
composer install --ignore-platform-reqs

## akses data base

cp .env.example .env
php artisan key:generate
php artisan migrate:refresh --seed
php artisan db:seed --class=CreateUsersSeeder
php artisan db:seed --class=CreateRolesSeeder
php artisan storage:link

## Run

php artisan serve

## api

composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate:fresh --seed
