<ol>
    <li><p align="center">
1 Clonar el proyecto <br></p>
Asegurarse que el archivo murales.csv esté dentro de la carpeta storage\app\data <br>
Si no se encuentra puede descargarse de https://data.buenosaires.gob.ar/dataset/?groups=cultura-y-turismo</li>
    <li><p align="center">
2 composer install</p></li>
    <li><p align="center">
3 composer require laravel/sail --dev </p></li>
    <li><p align="center">
4 php artisan sail:install</p></li>
    <li><p align="center">
5 Crear .env con db conection:<br></p>
    DB_CONNECTION=mysql<br>
    DB_HOST=mysql<br>
    DB_PORT=3306<br>
    DB_DATABASE=laravel<br>
    DB_USERNAME=sail<br>
    DB_PASSWORD=password<br>
    </li>
    <li><p align="center">
6 ./vendor/bin/sail up -d </p></li>
    <li><p align="center">
7 /vendor/bin/sail artisan migrate</p></li>
    <li><p align="center">
8 ./vendor/bin/sail artisan db:seed</p></li>
    <li><p align="center">
9 Consulta de murales por postman:<br></p>
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
}</li>
    <li><p align="center">
10 Crud de Visitas por postman:<br></p>
Todas: http://localhost/api/visitas<br>
Por id: http://localhost/api/visitas/1<br>

</li>
</ol>






















#