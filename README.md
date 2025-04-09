
# Andersen Task

Implementation of the test assignment using PHP 8.x, Laravel 12.x, MySQL, and Vite.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/maxim-tszyu/AndersenTask.git
    ```

2. Navigate to the project directory:

    ```bash
    cd AndersenTask
    ```

3. Install dependencies via Composer:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

5. Configure your environment, e.g., set your database connection in the `.env` file:

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=andersen_task
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. Generate the application key:

    ```bash
    php artisan key:generate
    ```

7. Run database migrationsЖ

    ```bash
    php artisan migrate --seed
    ```

8. Install frontend dependencies via npm:

    ```bash
    npm install
    ```

9. Run tests and check if the site is working correctly:

    ```bash
    php artisan test
    ```

10. Start the local development servers:

    ```bash
    npm run dev
    ```
    and

    ```bash
    php artisan serve
    ```
