#  RESTful-api-Laravel 
###### Laravel v8.83.27 (PHP v7.3.0)

## Api
#### GET DOMAIN/api/countries
Displays a list of countries
#### GET DOMAIN/api/countries/{id}
Displays information about the country
#### POST DOMAIN/api/countries [alies, name]
Add country
#### PATCH DOMAIN/api/countries/{id} [alies, name]
Change country information
#### DELETE DOMAIN/api/countries/{id}
Delete country

## Install

- Clone repository ```https://github.com/AndrewYaremenko/RESTful-api-Laravel.git```
- Navigate to the project directory
- Connect the required libraries: **composer install**
- Copy and rename **.env.example** to **.env** and changes 
<pre>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
</pre>
- Migrate tables to the database: **php artisan migrate**
- Fill in the tables with the ready data: **php artisan db:seed class=CountryLangSeeder**