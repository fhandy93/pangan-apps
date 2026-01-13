<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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
# 🚀 Pangan-Apps (Nama Aplikasi Sementara)

Aplikasi berbasis Laravel Framework yang dikembangkan untuk mendukung kebutuhan sistem informasi berbasis web pada pengujian pangan BBPOM Di Makassar.

---

## 🛠️ Teknologi yang Digunakan
- PHP >= 8.2
- Laravel Framework
- Composer 
- MySQL 
---

## 📂 Struktur Direktori
app/
bootstrap/
config/
database/
lang/
public/
resources/
routes/
storage/
stubs/
tests/

---

## ⚙️ Cara Instalasi

1. Clone Repository
git clone https://github.com/fhandy93/pangan-apps.git, masuk ke directory menggunakan perintah : 'cd pangan-apps'

2. Install Dependency Backend
composer install 

3. Konfigurasi Environment
cp .env.example .env
php artisan key:generate

4. Konfigurasi Database
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=nama_database
- DB_USERNAME=username
- DB_PASSWORD=password

5. Migrasi Database
php artisan migrate
php artisan db:seed

6. Storage Link
php artisan storage:link

7. Menjalankan Aplikasi
php artisan serve

Akses:
http://127.0.0.1:8000

---

## 🚫 File yang Tidak Diikutsertakan
.env
/vendor
/node_modules

---
