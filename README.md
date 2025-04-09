
# Andersen task

Реализация тестового задания с использованием PHP 8.x, Laravel 12.x, MySQL и Vite

## Установка

1. Клонируйте репозиторий:

    ```bash
    git clone https://github.com/maxim-tszyu/AndersenTask.git
    ```

2. Перейдите в папку с проектом:

    ```bash
    cd AndersenTask
    ```

3. Установите зависимости с помощью Composer:

    ```bash
    composer install
    ```

4. Скопируйте файл `.env.example` в `.env`:

    ```bash
    cp .env.example .env
    ```

5. Настройте ваше окружение, например, укажите параметры подключения к базе данных в `.env`:

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=andersen_task
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. Генерируйте ключ приложения:

    ```bash
    php artisan key:generate
    ```

7. Выполните миграции базы данных (если это необходимо):

    ```bash
    php artisan migrate --seed
    ```

8. Установите зависимости для фронтенда с помощью npm

    ```bash
    npm install
    ```
9. Запустите тесты и проверьте работоспособность сайта

    ```bash
    php artisan test
    ```

10. Запустите локальный сервер:

    ```bash
    npm run dev
    ```
    и

    ```bash
    php artisan serve
    ```
