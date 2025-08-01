# Laravel Modularized project

Un proyecto Laravel estructurado de forma modular. [Leer este documento en inglés](README.md).

## Objetivo

Definir una estructura base a la que se le puedan agregar distintos módulos. Estos pueden ser independientes entre sí, contar con sus propios modelos, controladores, vistas, permisos, etc. Idealmente, las funcionalidades de los módulos no deben modificar la funcionalidad base de Laravel, sino extenderla.

## Características

- PHP 8.4, Laravel 12.
- Se base en una instalación fresca de Laravel, creada con `laravel new`:
    - Starter kit: **Livewire**.
    - Authentication provider: **Laravel's built-in**.
    - Use Laravel Volt: **No**.
    - Testing framework: **Pest**.
- Usa librerías externas (`nwidart/laravel-modules`, `mhmiton/laravel-modules-livewire` y `wikimedia/composer-merge-plugin`) para mantener cada módulo en su propio directorio.
- Organiza funcionalidades provistas por el starter kit de Laravel (autenticación de usuarios y Dashboard) a módulos independientes `Auth` y `Dashboard`.
- Extiende el modelo `User` para agregar el atributo `uid` y hacer que `id` sea un UUID. Además, reformula el Factory de este modelo.
- Elimina la librería `livewire/volt`, incluida en el stater kit, por ser incompatible con `mhmiton/laravel-modules-livewire`.

## Instalación local

```bash
# 1. Clonar el repositorio
git clone https://github.com/javiertapia/apps-modules.git my-app

# 2. Cambiar al directorio del proyecto
cd my-app

# 3. Instalar dependencias de PHP y librerías frontend
composer install
npm install
npm run build

# 4. Crear el entorno del proyecto
cp .env.example .env
php artisan key:generate

# 5. Ejecutar migraciones
php artisan migrate
php artisan module:migrate Auth

# 6. Ejecutar el proyecto en forma local
composer run dev
```

## Ejecución de pruebas funcionales

```bash
php artisan test
php artisan test Modules/Auth
php artisan test Modules/Dashboard
```
