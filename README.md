# Nexcell - Tienda Online de Tecnología

## Descripción

Nexcell es una plataforma web de comercio electrónico desarrollada con Laravel que permite la gestión y venta de productos tecnológicos.

El sistema cuenta con:

* Catálogo de productos.
* Búsqueda y filtrado de productos.
* Carrito de compras.
* Gestión de usuarios.
* Historial de compras.
* Panel de administración.
* Gestión de productos.
* Gestión de usuarios.
* Gestión de consultas.
* Gestión de ventas.

---

# Requisitos

Antes de ejecutar el proyecto es necesario tener instalado:

* PHP 8.2 o superior
* Composer
* MySQL
* Laravel Herd (recomendado)
* Git

---

# Instalación

## 1. Clonar el repositorio

```bash
git clone URL_DEL_REPOSITORIO
```

Ingresar al proyecto:

```bash
cd nexcell
```

---

## 2. Instalar dependencias

```bash
composer install
composer require barryvdh/laravel-dompdf
composer 
```

---

## 3. Crear archivo .env

Copiar el archivo de ejemplo:

```bash
cp .env.example .env
```

o en Windows:

```bash
copy .env.example .env
```

## OPCION PARA RECUPERAR CONTRASEÑA 
## 1. Configurar el archivo .env
Editar el archivo .env y agregar o modificar las siguientes variables:

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME="tu_correo@gmail.com"
MAIL_PASSWORD="tu_clave_de_aplicacion_de_google"
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="tu_correo@gmail.com"
MAIL_FROM_NAME="Nexcell"
## 2. Generar contraseña de aplicación en Google

Para que Gmail permita el envío de correos desde la aplicación:

Ingresar a tu cuenta de Google.
Activar la verificación en dos pasos.
Ir a: https://myaccount.google.com/apppasswords
Generar una contraseña de aplicación.
Copiar esa contraseña y colocarla en MAIL_PASSWORD.
## 3. Importante
No usar la contraseña normal de Gmail.
La clave generada por Google es la que permite el envío de correos desde Laravel.
Sin esta configuración, la recuperación de contraseña no funcionará.
---

## 4. Configurar la base de datos

Editar el archivo `.env` y configurar:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=laravel_db
DB_USERNAME=root
DB_PASSWORD=Amir11022013
```

Modificar los valores según la configuración local.

---

## 5. Generar la clave de Laravel

```bash
php artisan key:generate
```

---

## 6. Ejecutar migraciones

```bash
php artisan migrate
```


## 7. Ejecutar la aplicación

```bash
php artisan serve
```

o utilizando Laravel Herd:

```
https://nexcell.test
```

---

# Acceso al sistema

## Usuario Administrador

Email:JoseLop123@gmail.com
Contraseña:123123123

## Usuario Cliente

Email: leofonteina00@gmail.com 
Contraseña:123123123

Email: agustin552689@gmail.com
Contraseña:123123123

# Funcionalidades

## Cliente

* Registro e inicio de sesión.
* Visualización de productos.
* Filtrado por categorías.
* Filtrado por marcas.
* Búsqueda de productos.
* Gestión del carrito.
* Confirmación de compras.
* Historial de compras.
* Gestión del perfil.

## Administrador

* Gestión de productos.
* Gestión de usuarios.
* Gestión de consultas.
* Gestión de ventas.
* Control de stock.

---

# Tecnologías utilizadas

* Laravel
* PHP
* MySQL
* Bootstrap 5
* JavaScript
* HTML5
* CSS3

---

# Autor
Gomez Agustin - Leonardo Fonteina
Proyecto desarrollado como trabajo académico para la carrera Licenciatura en Sistemas de Información.
