# Laravel Intro

Учебный проект по курсу Laravel (Нетология).

## Ветки

- `main` — установка Composer и Laravel
- `basics` — MVC приложение (группы и студенты)
- `rest` — REST API с Laravel Sanctum

## Технологии

- PHP 8
- Laravel 11
- Laravel Sanctum
- SQLite

## REST API (ветка rest)

Маршруты:
- POST /api/tokens/create — получить токен
- GET /api/user — данные авторизованного пользователя
- GET /api/cars — список автомобилей
- POST /api/cars — создать автомобиль
- GET /api/cars/{id} — один автомобиль
- PUT /api/cars/{id} — обновить автомобиль
- DELETE /api/cars/{id} — удалить автомобиль