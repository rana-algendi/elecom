# Elecom - E-commerce Web Application

Elecom is a dynamic e-commerce web application built with the **Laravel** framework. It features a complete system for managing products and categories, utilizing Laravel's Blade engine for the frontend and Eloquent ORM for database management.

## 🚀 Key Features

* **Product Management:** Complete CRUD functionality (Create, Read, Update, Delete) to manage product listings, prices, and descriptions.
* **Category System:** Dynamic product categorization for better organization and easy navigation.
* **Database Design:** Well-structured relational database to handle products and their categories.
* **User Authentication:** Secure login and registration system for users.
* **Blade Templating:** Clean and responsive views built with Laravel Blade.

## 🛠️ Tech Stack

* **Backend:** [Laravel](https://laravel.com) (PHP)
* **Frontend:** Blade Templates, HTML, CSS
* **Database:** MySQL
* **Tools:** Composer, Artisan CLI

## ⚙️ Installation & Setup (How to run)

To get this project up and running on your local machine, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/rana-algendi/elecom.git](https://github.com/rana-algendi/elecom.git)
2.Install PHP dependencies:
Bash
composer install

3.Environment Configuration:

Create a MySQL database on your machine.

Rename the .env.example file to .env.

Update DB_DATABASE, DB_USERNAME, and DB_PASSWORD in the .env file with your local database credentials.

4.Generate Application Key:

Bash
php artisan key:generate

5.Run Database Migrations:

Bash
php artisan migrate

6.Start the Local Server:

Bash
php artisan serve
Now you can access the app at http://127.0.0.1:8000.

Developed by Rana Algendi.
