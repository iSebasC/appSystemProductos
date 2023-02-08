

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://sebastiancabrera.netlify.app/assets/img/1x/logo.png" width="40" alt="Laravel Logo"></a></p>

## ⚡ Sistema de Productos ⚡
Esto es la continuación del sistema anterior <a href="https://github.com/iSebasC/appProductos">appProductos</a>, se enfoco en hacer con migraciones y con relacion entre tablas como extra se implemento el <a href= "https://packagist.org/packages/barryvdh/laravel-dompdf">DOMPDF</a> para hacer un reporte de productos.



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://sebastiancabrera.netlify.app/assets/img/projects/appSystemProductosv2/1.png" width="400" alt="productos principal"></a></p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://sebastiancabrera.netlify.app/assets/img/projects/appSystemProductosv2/2.png" width="400" alt="productos principal"></a></p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://sebastiancabrera.netlify.app/assets/img/projects/appSystemProductosv2/3.png" width="400" alt="productos principal"></a></p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://sebastiancabrera.netlify.app/assets/img/projects/appSystemProductosv2/4.png" width="400" alt="productos principal"></a></p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://sebastiancabrera.netlify.app/assets/img/projects/appSystemProductosv2/5.png" width="400" alt="productos principal"></a></p>

## ✨ Instalacion
- Crear una base de datos mysql
- Clonar o descargar el proyecto en el directorio de tu servidor web
- Acceder mediante terminal a la carpeta del proyecto
- Ejecutar:  Composer install
- Crear el archivo .env con los comandos:  cp .env.example .env
- Generar la API key ejecutando:  php artisan key:generate 
- En el archivo .env colocar el nombre de la base de datos
- Para ejecutar las migraciones: php artisan migrate

## ✨ Tablas de la Base de Datos
#### Tabla Categorias
- id
- categoria
#### Tabla Productos
- id
- nombre
- descripcion
- id_categoria

## ✨ Enlace del DOMPDF

https://packagist.org/packages/barryvdh/laravel-dompdf
<br>
Autor del DOMPDF: Barryvdh


## ✨ Video Base 

https://www.youtube.com/watch?v=p5-pwNVdKfc&t=279s 
<br>
Autor del Video: Programando con Dan Cruise

