<p align="center">
1 Clonar el proyecto 
    Asegurarse que el archivo murales.csv esté dentro de la carpeta storage\app\data
    Si no se encuentra puede descargarse de https://data.buenosaires.gob.ar/dataset/?groups=cultura-y-turismo

2 composer install

3 composer require laravel/sail --dev 

4 php artisan sail:install

5 Crear .env con db conection:

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password

6 ./vendor/bin/sail up -d 

7 /vendor/bin/sail artisan migrate

8 ./vendor/bin/sail artisan db:seed


</p>

<p align="center">

</p>

#