# Sistema Ecommerce

Este es un sistema de comercio electrónico desarrollado con PHP, MySQL y Bootstrap.

## Estructura del Proyecto

```
ecommerce/
├── assets/                    # Archivos estáticos
│   ├── css/                  # Archivos CSS personalizados
│   ├── js/                   # Archivos JavaScript
│   ├── img/                  # Imágenes
│   └── uploads/              # Archivos subidos por usuarios
│
├── config/                   # Configuración
│   ├── database.php         # Configuración de la base de datos
│   └── config.php           # Configuración general
│
├── includes/                 # Archivos PHP reutilizables
│   ├── header.php           # Encabezado común
│   ├── footer.php           # Pie de página común
│   └── functions.php        # Funciones auxiliares
│
├── admin/                    # Panel de administración
│   ├── products/            # Gestión de productos
│   ├── orders/              # Gestión de pedidos
│   ├── users/               # Gestión de usuarios
│   └── dashboard/           # Panel principal
│
├── models/                   # Modelos de datos
│   ├── Product.php
│   ├── User.php
│   ├── Order.php
│   └── Category.php
│
├── controllers/             # Controladores
│   ├── ProductController.php
│   ├── UserController.php
│   ├── OrderController.php
│   └── CartController.php
│
├── views/                   # Vistas
│   ├── products/           # Vistas de productos
│   ├── cart/               # Vistas del carrito
│   ├── user/               # Vistas de usuario
│   └── checkout/           # Vistas de pago
│
├── vendor/                  # Dependencias (Composer)
├── .htaccess               # Configuración de Apache
├── index.php               # Punto de entrada principal
└── composer.json           # Gestión de dependencias

## Tecnologías Principales

- PHP 8.x
- MySQL 8.x
- Bootstrap 5.x
- jQuery
- Apache/Nginx

## Requisitos Previos

- PHP >= 8.0
- MySQL >= 8.0
- Apache/Nginx
- Composer

## Instalación

1. Clonar el repositorio
2. Configurar el servidor web (Apache/Nginx) para apuntar al directorio del proyecto
3. Crear la base de datos MySQL
4. Importar el archivo SQL de la estructura de la base de datos
5. Copiar `config/database.example.php` a `config/database.php` y configurar las credenciales
6. Instalar dependencias:
   ```bash
   composer install
   ```

## Desarrollo

1. Configurar un servidor local (XAMPP, WAMP, etc.)
2. Importar la base de datos
3. Acceder a través del navegador: `http://localhost/ecommerce`

## Base de Datos

El archivo SQL con la estructura de la base de datos se encuentra en `database/structure.sql`

## Contribución

1. Fork el proyecto
2. Crea tu rama de características
3. Commit tus cambios
4. Push a la rama
5. Abre un Pull Request