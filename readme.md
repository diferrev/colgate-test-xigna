# Colgate Prueba - Xigna

>Prueba para vacante de desarrollador - Xigna

## Prerequisitos

Tener instalado Composer

## Uso
### Instalación

Descargar las dependencias del proyecto.
```
$ composer install
```
Antes de continuar, se debe crear una base de datos MySQL para insertar los datos de prueba.
Y luego renombrar el archivo .env.example a .env y modificarlo con las credenciales de acceso a la base de datos.

Luego crear las tablas e insertar los datos.
```
$ php artisan migrate
$ php artisan db:seed
$ php artisan key:generate
```