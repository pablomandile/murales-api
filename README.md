<p align="center"><h1>Ejercicio CRUD API</h1></p>
<br><br>
<h2>Instrucciones</h2>
<br><br>
<ol>
    <li>Clonar el proyecto <br>
        git clone https://github.com/pablomandile/murales-api.git<br>
        Asegurarse que el archivo murales.csv esté dentro de la carpeta storage\app\data <br>
        Si no se encuentra puede descargarse de<br>
         https://data.buenosaires.gob.ar/dataset/?groups=cultura-y-turismo</li>
    <li>Ejecutar composer install</li>
    <li>Ejecutar composer require laravel/sail --dev </li>
    <li>php artisan sail:install</li>
    <li>Crear .env con db conection:<br>
        DB_CONNECTION=mysql<br>
        DB_HOST=mysql<br>
        DB_PORT=3306<br>
        DB_DATABASE=laravel<br>
        DB_USERNAME=sail<br>
        DB_PASSWORD=password<br>
    </li>
    <li>./vendor/bin/sail up -d</li>
    <li>./vendor/bin/sail artisan migrate</li>
    <li>./vendor/bin/sail artisan db:seed</li>
    <li>Consulta de murales por postman:<br>
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
    <li>Crud de Visitas por postman:<br>
        Todas: http://localhost/api/visitas<br>
        Por id: http://localhost/api/visitas/1<br>
    </li>
</ol>






















#