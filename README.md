#  Sistema de Gestión de Liga de Básquetbol

Aplicación web desarrollada en Laravel para la administración de una liga de básquetbol, permitiendo gestionar equipos, jugadores, partidos, estadísticas y clasificación de equipos.

---

##  Objetivo del Proyecto

Desarrollar una aplicación web que facilite la gestión de una liga de básquetbol mediante una interfaz intuitiva, permitiendo registrar y administrar la información deportiva de manera organizada.

---

##  Funcionalidades Principales

- Nos ayuda a la gestión de equipos.
-  Mejor gestión de jugadores.
-  La facilidad de registro de partidos.
-  Es muy bueno con la visualización de estadísticas.
-  Clasificación de equipos.
-  Sistema de autenticación (Login y Registro).
-  Dashboard con acceso a los módulos principales.

---

## Tecnologías Utilizadas

- PHP 8
- Laravel 9
- Blade
- MySQL
- HTML5
- CSS3
- JavaScript
- Bootstrap/Tailwind CSS
- Git y GitHub

---

##  Estructura del Proyecto

```text
app/
├── Http/Controllers
├── Models

resources/views/
├── auth
├── equipos
├── jugadores
├── partidos
├── estadisticas
├── layouts

routes/
└── web.php

database/
└── migrations
```

---

##  Instalación y Ejecución

### 1. Clonar el repositorio

```bash
git clone https://github.com/JairoCardenas-984/liga-basquetbol.git
```

### 2. Entrar al proyecto

```bash
cd liga-basquetbol
```

### 3. Instalar dependencias

```bash
composer install
npm install
```

### 4. Configurar el archivo .env

```bash
cp .env.example .env
```

Configurar la conexión a la base de datos:

```env
DB_DATABASE=liga_basquetbol
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generar la clave de Laravel

```bash
php artisan key:generate
```

### 6. Ejecutar las migraciones

```bash
php artisan migrate
```

### 7. Ejecutar el servidor

```bash
php artisan serve
```

Abrir:

```text
http://127.0.0.1:8000
```

---

##  Integrantes

- Kevin Cárdenas
- Naydu monge
- Maricela Quino

---

##  Flujo de Trabajo con GitFlow

Ramas utilizadas:

- `main` → versión estable.
- `develop` → desarrollo.
- `feature/clasificacion` → implementación de la clasificación de equipos.

Se trabajó mediante:

- Commits periódicos.
- Pull Requests.
- Merge de funcionalidades.

---


## Licencia

Proyecto desarrollado con fines académicos para el curso de Ingeniería de Software 2.
