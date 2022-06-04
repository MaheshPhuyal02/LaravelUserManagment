<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About project 
Usermanagment is a simple project created with laravel. This is a first laravel project made by a begginer.

## Functions
- Add username, email and password to database
- Create a custom session key and value(Only support string)
- Flush Session
- Delete Session
- Search user
- Trash, edit and delete user

## Requirements
<table>
<thead>
<tr>
<th>Package</th>
<th>Version</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<a href="https://getcomposer.org/" rel="nofollow">Composer</a></td>
<td>V2.2.6+</td>
</tr>
<tr>
<td><a href="https://www.php.net/" rel="nofollow">Php</a></td>
<td>V8.0.17+</td>
</tr>
<tr>
<td><a href="https://www.mysql.com/" rel="nofollow">Mysql</a></td>
<td>V 8.0.27+</td>
</tr>
</tbody>
</table>

## Setup
First install xampp and run php(Apache) and mysql. Go to xampp folder and inside htdocs :

1. Clone this repo
<pre>git clone https://github.com/MaheshPhuyal02/LaravelUserManagment.git </pre>

2. Go to folder
<pre>cd LaravelUserManagment</pre>

3. Copy .env.example file to .env file
<pre>cp .env.example .env</pre>

4. Generate key
<pre>php artisan key:generate</pre>

5. Create database
<pre>laravel_form</pre>

6. Install libaries
<pre>composer install</pre>

7. Run migration
<pre>php artisan migrate</pre>

8. Run 
Open your broswer and go to url
<pre>localhost/LaravelUserManagment/public</pre>


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
