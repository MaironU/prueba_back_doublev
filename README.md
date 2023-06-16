## Listado de tecnologías o frameworks utilizados

Ésta api esta desarrollada con el lenguaje PHP version 8.1 y el framework de Laravel version 10, se utilizó git para el versionamiento y heroku como servidor. Es muy fácil de utilizar y ya lo verá más adelante.

## Cómo instalar las dependencias y correr el proyecto

A continuación se mostraran los pasos 1 a 1 para poder dejar el proyecto funcionando localmente

- Clonar el siguiente repositorio https://github.com/MaironU/pruebaamericas con el comando git clone https://github.com/MaironU/pruebaamericas

- Luego de clonar entrar a la carpeta por consola usando cd pruebaamericas/.

- Instalar las dependencias correspondientes con el comando composer install, dado el caso que ocurra un error se va a la raiz del proyecto y crea una carpeta llamada vendor y vuelve a ejecutar el comando.

- Una vez instalado las dependencias crear un archivo llamado .env en la raiz del proyecto para añadir la configuración correspondiente de la bdd.

- Una vez creado el archivo .env abrir el archivo .env.example que trae laravel por defecto, copiar toda la información y pegarla en el archivo .env creado anteriormente.

- Luego crear la bdd, usted escoge el nombre que desee, una vez creada la bdd se va al archivo .env y en DB_DATABASE poner el nombre de la base de datos que creó y en DB_PASSWORD poner la contraseña, en caso de no tener contraseña dejar vacío. Ejemplo: DB_DATABASE=nombrebdd y DB_PASSWORD=.

- Una vez configurada la bdd, abrir la consola ubicarse en el proyecto y correr el comando php artisan config:cache.

- Si llegaste hasta aqui ya debes tener la bdd funcionando correctamente.

- Luego vas a ejecutar el comando php artisan serve, para levantar el servidor.

- Y listo ya puedes empezar a usar la Api de tickets.

Importante: recuerda que al momento de ejecutar php artisan ser se te genera una url que es el DOMINIO del proyecto, ese DOMINIO es el que utilizará para hacer las peticiones a la api.


## Documentación API

Rutas

- GET DOMINIO/api/tickets Este endpoint obtiene todos los TICKETS que hay en la bdd, de manera paginada, 10 datos por página

- GET DOMINIO/api/tickets/id Este endpoint obtiene un TICKET en específico recibe como parámetro un id de tipo entero que es el id del ticket en la bdd EJEMPLO: DOMINIO/api/tickets/1.

- POST DOMINIO/api/tickets Este endpoint crea un TICKET y recibe como body un objeto como el siguiente:
{ "user": "Mayron Urieles", "status": "abierto" }, le fecha de creación y actualización se crean automáticamente.

- PUT DOMINIO/api/tickets/id Este endpoint actualiza un TICKET en específico, se debe enviar el id del TICKET a actualizar y como body un objeto con los datos a actualizar, Ejemplo:
{ "user": "Mayron Urieles Modificado" }

En este caso estoy enviando por body este objeto que significa que solo quiero actualizar el usuario, si deseo actualizar otro dato, podria enviarlo tambien desde el mismo objeto.

DELETE DOMINIO/api/tickets/id Este endpoint elimina un TICKET y recibe como parámetro el id del ticket que se quiere eliminar.

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Url de producción

La Api ha sido subida a un servidor de heroku la url es la siguiente: https://apidoublevpartner-6da8e919a215.herokuapp.com

Puede probar la api tanto en local como en producción sin ningún problema
## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
