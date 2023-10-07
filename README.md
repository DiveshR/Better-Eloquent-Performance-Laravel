# Better Eloquent Performance in Laravel

Laravel Offical : https://laravel.com/docs/10.x/


* Author: Divesh Kumar
* Twitter: [@divesh20july](https://twitter.com/divesh20july)

# Overview
* N+1 Query Problem
* Eager Loading with load() and $with
* Detect and Prevent N+1 Query: With Package 
* Optimizing RAM Consumption
* PI Return: Kilobytes Optimization
* Optimizing CPU and Queries:
  ... and more.

# Setting up laravel-breeze the starter kit.

* Installing laravel breeze
```php
composer require laravel/breeze --dev
//After install run artisan command for laravel breeze basic auth system 
php artisan breeze:install
php artisan migrate

//npm for css js assets
npm install
//for compile assets
npm run dev

```
# N+1 Query Problem

```php
//To avoide duplication of query when relationship
//N+1 Query Problem
$posts = Post::all();

//Result

```
<img width="1280" alt="Screenshot 2023-10-07 at 8 00 06 PM" src="https://github.com/DiveshR/Better-Eloquent-Performance-Laravel/assets/25860707/0f493519-2b6d-4b5f-9228-eef3353f60bb">

# Eager loading
 * To resolve N+1 Query Problem
```php
//Correct way with eager loading with relationship table
$posts = Post::with('user')->get();

// Other Way
$posts = Post::all();
$posts->load('user');

//Result

```

<img width="1280" alt="Screenshot 2023-10-07 at 8 04 52 PM" src="https://github.com/DiveshR/Better-Eloquent-Performance-Laravel/assets/25860707/a52830b3-08b9-4dd4-ac8a-98fbf860d838">
