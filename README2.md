# JKH Portal (Laravel project)

## 📌 О проекте
Это учебный проект сайта ЖКХ на Laravel.  
Сейчас реализовано:
- Главная страница (welcome)
- Раздел "Новости"
- Возможность добавлять новости через форму
- Отображение всех новостей на отдельной странице

## ⚙️ Стек технологий
- PHP 8+
- Laravel 11
- MySQL
- Composer
- Git/GitHub

## 🗂 Структура проекта
Основные папки и файлы:
- `app/Http/Controllers/NewsController.php` — контроллер для новостей
- `app/Models/News.php` — модель новости
- `resources/views/news/` — шаблоны для новостей:
  - `index.blade.php` — список новостей
  - `create.blade.php` — форма добавления новости
  - `edit.blade.php` — (пока пустой, для будущего редактирования)
- `routes/web.php` — маршруты сайта
- `database/migrations/` — миграции (в т.ч. таблица `news`)

## 🚀 Установка проекта
1. Склонировать репозиторий:
   ```bash
   git clone https://github.com/Ezzhee/jkh-portal.git
   cd jkh-portal
2. Установить зависимости:
composer install
3. Настроить окружение:
cp .env.example .env
php artisan key:generate
4. Настроить подключение к базе в .env
(например, MySQL jkh_portal).
5. Применить миграции:
php artisan migrate
6. Запустить локальный сервер:
php artisan serve

Сайт будет доступен на http://127.0.0.1:8000

## ✨ Как пользоваться

http://127.0.0.1:8000/news — список новостей

http://127.0.0.1:8000/news/create — форма добавления новости

## 📌 Что дальше?

- Сделать редактирование и удаление новостей (полный CRUD)
- Добавить авторизацию (админ может добавлять/удалять новости)
- Сделать дизайн (подключить CSS/Bootstrap/Tailwind)
