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

9 Consulta de murales por postman:
Todos: http://localhost/api/murales
Por id: http://localhost/api/murales/20
ejemplo de respuesta:
{
    "data": {
        "greeting": "Gracias por usar la API de Murales de Ciudad de Buenos Aires",
        "nombre": "EL PUEBLO HEBREO",
        "autores": "JUAN BATLLE PLANAS",
        "tecnica": "MOSAICO VENECIANO",
        "ubicacion": "HALL",
        "barrio": "Balvanera"
    }
}

10 Crud de Visitas por postman:
Todas: http://localhost/api/visitas
Por id: http://localhost/api/visitas/1



</p>

<p align="center">

</p>

#