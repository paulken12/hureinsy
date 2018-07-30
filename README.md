# hureinsy
Laravel and vue project test

- git clone https://github.com/paulken12/hureinsy.git

- cd to the project directory and run the command


    >composer install 

    >copy .env.example .env 

    >php artisan key:generate

- create database xampp/wamp : database_name - collations : utf8mb4_unicode_ci

- open .env file and modify the database connection


    DB_DATABASE=database_name
    DB_USERNAME=root
    DB_PASSWORD=

- copy the csv files in the drive and paste to hureinsy>database>seeds>csv


    >php artisan migrate

    >php artisan db:seed --class=DatabaseSeeder

    >npm install

    >npm run dev

- open terminal and cd to the project directory and run the command
    
    
    >php artisan serve

--------------------------------------------------------------
to fix the broken image 

    php artisan storage:link

