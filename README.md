# Создание кастомного PHP MVC фреймворка

Собственная реализация MVC-фреймворка на PHP 8 ООП в стиле Laravel.

## Стек
- PHP 8+
- Composer
- Symfony/VarDumper
- vlucas/valitron
- Bootstrap 6

## Что уже реализовано
- Роутинг с поддержкой GET/POST
- Контроллеры и базовый Controller
- Модели и загрузка данных (fillable)
- Шаблонизатор + layouts
- Валидация форм (valitron), вывод ошибок, локализация - РУ
- Подключён Bootstrap

## В планах
- База данных (PDO)
- Миграции
- Аутентификация
- Middleware
- Обработка 404
- …

## Быстрый старт
```bash
git clone https://github.com/Kirill-Rusakov/custom-framework.git
cd custom-framework
composer install
php -S 127.0.0.1:8000
```
