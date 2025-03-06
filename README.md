<p align="center">
1 Clonar el proyecto <br>
Asegurarse que el archivo murales.csv esté dentro de la carpeta storage\app\data <br>
Si no se encuentra puede descargarse de https://data.buenosaires.gob.ar/dataset/?groups=cultura-y-turismo

2 composer install

3 composer require laravel/sail --dev 

4 php artisan sail:install

5 Crear .env con db conection:<br>

DB_CONNECTION=mysql<br>
DB_HOST=mysql<br>
DB_PORT=3306<br>
DB_DATABASE=laravel<br>
DB_USERNAME=sail<br>
DB_PASSWORD=password<br>

6 ./vendor/bin/sail up -d 

7 /vendor/bin/sail artisan migrate

8 ./vendor/bin/sail artisan db:seed

9 Consulta de murales por postman:<br>
Todos: http://localhost/api/murales<br>
Por id: http://localhost/api/murales/20<br>
ejemplo de respuesta:<br>
{<br>
    "data": {<br>
        "greeting": "Gracias por usar la API de Murales de Ciudad de Buenos Aires",<br>
        "nombre": "EL PUEBLO HEBREO",<br>
        "autores": "JUAN BATLLE PLANAS",<br>
        "tecnica": "MOSAICO VENECIANO",<br>
        "ubicacion": "HALL",<br>
        "barrio": "Balvanera"<br>
    }
}

10 Crud de Visitas por postman:<br>
Todas: http://localhost/api/visitas<br>
Por id: http://localhost/api/visitas/1<br>



</p>

<p align="center">

</p>

#