<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre el proyecto

Esta aplicación permite determinar si el usuario tiene depresión o alguna de las enfermedades relacionadas. Estas enfermedades son:



- [Hipotiroidismo](https://medlineplus.gov/spanish/ency/article/000353.htm).
- [Anemia](https://medlineplus.gov/spanish/anemia.htm).
- [Trastorno Bipolar](https://medlineplus.gov/spanish/bipolardisorder.htm).
- [Distimia](https://medlineplus.gov/spanish/ency/article/000918.htm).
- [Encefalomielitis](https://www.analesdepediatria.org/es-encefalomielitis-aguda-diseminada-analisis-epidemiologico-articulo-S1695403311003894).



## Requerimientos para instalar este programa


Laravel tiene unos requerimientos [en su documentación](https://laravel.com/docs/7.x#server-requirements) pero básicamente se necesita:

* Instalar Composer. Lo pueden hacer [desde este enlace](https://getcomposer.org/)
* Instalar XAMMP, Laragon u otro servidor local. Recomiendo descargar [laragon](https://sourceforge.net/projects/laragon/files/releases/4.0/laragon-full.exe)


Después de tener eso se puede descargar el repositorio como ZIP o lo clonan desde Github. (Clic en el botón verde).

Luego se debe abrir la terminal o consola y ubicarse dentro de la carpeta del proyecto.

`c:/xampp/depression_app
`

Y digitar el comando de instalación:

`composer install`

Luego copiar las variables de entorno.

`cp .env.exaple .env`

Asignar la clave de la aplicación

`php artisan key:generate`

Abrir la aplicación en el navegador o ejecutar

`php artisan serve`

## Diagnosticar Trastorno de bipolaridad

<p align="center">
	<img src="https://github.com/BrayanAngaritaR/depression_app/blob/master/public/readme/bipolar.png">
</p>

## Diagnosticar Encefalomielitis

<p align="center">
	<img src="https://github.com/BrayanAngaritaR/depression_app/blob/master/public/readme/encefalomielitis.png">
</p>

## Diagnosticar Anemia

<p align="center">
	<img src="https://github.com/BrayanAngaritaR/depression_app/blob/master/public/readme/anemia.png">
</p>