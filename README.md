# hureinsy
Laravel and vue project test

git clone https://github.com/paulken12/hureinsy.git

composer install 

cp .env.example .env - linux (for windows copy)

php artisan key:generate

create database xampp/wamp : database_name - collations : utf8mb4_unicode_ci

open .env file and modify the database connection

	DB_DATABASE=database_name
	DB_USERNAME=root
	DB_PASSWORD=

copy the csv files in the drive and paste to hureinsy>database>seeds>csv

php artisan migrate

php artisan db:seed --class=DatabaseSeeder

