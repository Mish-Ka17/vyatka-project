<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# vyatka-project
    Стек:
    - Laravel v13
    - Vite v8
    - Tailwind CSS v4

## Требования

- PHP 8.4+
- Composer 2
- Node.js 22+
- npm
- Open Server Panel 6.5+

## Установка модулей и настройка проекта

composer install  (установка PHP-зависимостей)

npm install  (установка Node-пакетов)

copy .env.example .env  (создание файла конфигурации .env)

php artisan key:generate  (генерация ключа Laravel)

настроить файл .env:
 
 - APP_ENV=local

 - APP_DEBUG=true

 - APP_URL=https://vyatka-project

 - Подключение к БД выполнять необязательно, т.к тестовые данные находятся в самом коде 

php artisan migrate (необязательно выполнение ввиду не использования БД )

php artisan storage:link  (создание символичекой ссылки, необязательно для тестового режима )

#### Сборка development

npm run dev  (сборка frontend в режиме разработки)

#### Сборка production

npm run build  (сборка frontend для production)

## Запуск проекта локально

Проект разрабатан в среде Open Server 6

## Возможности

- Главная страница
- Каталог товаров
- Страница категории
- Карточка товара
- Блог
- Страница статьи
- Модальное окно обратной связи (Контакты)
