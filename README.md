# Laravel Modularized project

A modularly structured Laravel project. [Read this document in Spanish](README_es.md).

## Purpose

The goal is to define a base structure to which different modules can be added. These can be independent of each other and have their own models, controllers, views, permissions, etc. Ideally, the modules' functionality should not modify Laravel's core functionality, but rather extend it.

## Features

- PHP 8.4, Laravel 12.
- It is based on a fresh installation of Laravel, crafted with `laravel new`:
    - Starter kit: **Livewire**.
    - Authentication provider: **Laravel's built-in**.
    - Use Laravel Volt: **No**.
    - Testing framework: **Pest**.
- Uses external libraries (`nwidart/laravel-modules`, `mhmiton/laravel-modules-livewire` y `wikimedia/composer-merge-plugin`) to keep each module in its own directory.
- Organizes functionality provided by Laravel starter kit (user authentication and Dashboard) into separate `Auth` y `Dashboard` modules.
- Extends the `User` module to add the `uid` attribute and make `id` a UUID. Additionally, it reworks the Factory for this model.
- Removes the `livewire/volt` library, included in the stater kit, because it is incompatible with `mhmiton/laravel-modules-livewire`.

## Local installation

```bash
# 1. Clone the repository
git clone https://github.com/javiertapia/apps-modules.git my-app

# 2. Change to project directory
cd my-app

# 3. Install PHP dependencies and frontend libraries
composer install
npm install
npm run build

# 4. Create project environment
cp .env.example .env
php artisan key:generate

# 5. Run migrations
php artisan migrate
php artisan module:migrate Auth

# 6. Run the project locally
composer run dev
```

## Run functional tests

```bash
php artisan test
php artisan test Modules/Auth
php artisan test Modules/Dashboard
```





