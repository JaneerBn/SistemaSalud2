# Proyecto de Gestión de Citas Médicas

Este proyecto es una aplicación web para la gestión de citas médicas, pacientes y médicos. Fue desarrollado utilizando el framework Laravel Breeze para la autenticación y la gestión de la interfaz, y se utiliza `DB::table` para interactuar directamente con la base de datos.

## Contenido

* [Características](#características)
* [Requisitos ](#requisitos)
* [Instalación](#instalación)
* [Configuración](#configuración)
* [Ejecución](#ejecución)
* [Tecnologías Utilizadas](#tecnologías-utilizadas)
* [Créditos](#créditos)
* [Licencia](#licencia)

## Características

* **Gestión de Pacientes:**
    * Crear, leer, actualizar y eliminar pacientes.
    * Listado de pacientes.
* **Gestión de Médicos:**
    * Crear, leer, actualizar y eliminar médicos.
    * Listado de médicos.
* **Gestión de Citas:**
    * Crear, leer, actualizar y eliminar citas.
    * Listado de citas, mostrando información del paciente y el médico.
    * Formularios para la creación y edición de citas con selección de pacientes y médicos.

## Requisitos

Asegúrate de que tu servidor cumpla con los siguientes requisitos para ejecutar la aplicación Laravel:

* PHP >= 8.1 (o la versión que estés utilizando)
* Composer instalado globalmente
* Xampp instalado
* Xampp instalado o Un sistema de gestión de bases de datos compatible con Laravel (por ejemplo, MySQL, PostgreSQL, SQLite)

## Instalación

Sigue estos pasos para configurar y ejecutar el proyecto en tu entorno local o servidor:

1.  **Clona el repositorio:**
     ```bash
    git clone [https://github.com/JaneerBn/SistemaSalud2]
    cd [SGPCM]
    ```


2.  **Instala las dependencias de Composer:**
    composer install


3.  **Copia el archivo de entorno de ejemplo:**
    cp .env.example .env
   

4.  **Genera la clave de la aplicación:**
    php artisan key:generate

5.  **Configura la base de datos:**
    * Abre el archivo `.env` y configura las variables de conexión de la base de datos (DB\_CONNECTION, DB\_HOST, DB\_PORT, DB\_DATABASE, DB\_USERNAME, DB\_PASSWORD) para que coincidan con tu configuración.
    * DB\_DATABASE. se llama pizzeria

6.  **Ejecuta las migraciones para crear las tablas:**
    php artisan migrate
 

7.  **Instala las dependencias de Node.js:**
   
    npm install
  

## Configuración

* **Archivo `.env`:** 

## Ejecución

1.  **Inicia el servidor de desarrollo de Laravel:**
 
    php artisan serve

    Esto iniciará la aplicación en `http://localhost:8000`.


## Tecnologías Utilizadas

* [Laravel](https://laravel.com/) - El framework PHP utilizado.
* [Laravel Breeze](https://laravel.com/docs/) autenticación.
* `DB::table` - Para la interacción directa con la base de datos.
* [Bootstrap](https://getbootstrap.com/) - Framework CSS utilizado por Breeze (si lo elegiste).
* [PHP](https://www.php.net/) - El lenguaje de programación del lado del servidor.
* [MySQL](https://www.mysql.com/), - base de datos
* [Composer](https://getcomposer.org/) - 

## Créditos

* Janeer Barrera - William Villa S5AN Fcecep.