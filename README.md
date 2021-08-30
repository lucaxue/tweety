<h1 align='center'>Tweety</h1>

<p align='center'>A server side Twitter clone built to practice Laravel</p>

<div align='center'>

![Laravel](https://img.shields.io/badge/Laravel-2e2e2e?logo=laravel)
![PHP](https://img.shields.io/badge/php-2e2e2e?logo=php)
![My SQL](https://img.shields.io/badge/MySQL-2e2e2e?logo=mysql)
![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-2e2e2e?logo=tailwindcss)

</div>
<img src="https://i.imgur.com/H0z8g52.png" alt="Tweety Home Page">

## Development

### 🛠 Prerequisites

-   PHP 8+
-   Laravel 8
-   composer
-   MySQL
-   node & npm

### ⚙️ Setting Up

1. Install dependencies
    ```
    ./vendor/bin/composer install
    ```
    ```
    npm install && npm run dev
    ```
2. Create a database called 'tweety' and add your credentials to your `.env` file
    ```
    cp .env.example .env
    ```
3. Generate your app key
    ```
    php artisan key:generate
    ```
4. Migrate the tables to your database
    ```
    php artisan migrate
    ```
5. **Optional** - add some dummy data with tinker and model factories.
    ```
    php artisan tinker
    ```
    ```
    App\Models\Tweet::factory()->count(10)->create()
    ```
6. Run the app in your local port
    ```
    php artisan serve
    ```
