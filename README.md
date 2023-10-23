# skill-up-project

Опис проекту/його ціль.
Проект "Система управління нотатками" є веб-додатком, розробленим з метою забезпечити користувачам можливість створювати, редагувати і видаляти свої нотатки в зручний спосіб. Додаток дозволяє користувачам створювати облікові записи, щоб мати власний простір для збереження і керування своїми нотатками. Основні функціональні можливості проекту включають:

Реєстрація та аутентифікація користувачів: Користувачі можуть створювати облікові записи і увійти в систему за допомогою своїх облікових даних (логін та пароль).

Створення нових нотаток: Користувачі можуть створювати нові нотатки, вказуючи заголовок та текст нотатки. Нотатки зберігаються в базі даних і пов'язані з конкретним користувачем.

Редагування нотаток: Користувачі можуть редагувати свої існуючі нотатки, змінюючи їх заголовок та текст.

Видалення нотаток: Користувачі можуть видаляти свої нотатки, які вже не потрібні.

Перегляд всіх нотаток: Користувачі мають доступ до зручної панелі, де вони можуть переглядати всі свої нотатки в зручному списку.

Ціль проекту:
Основною метою проекту "Система управління нотатками" є надання користувачам зручного та ефективного способу створення, збереження і керування своїми нотатками. Проект дозволяє зосередитися на основній функціональності - створенні та редагітуванні нотаток, не витрачаючи час на складання власної системи управління нотатками. Головною ціллю проекту є забезпечення зручного та ефективного інструменту для організації і збереження інформації, що допомагає користувачам бути більш організованими і продуктивними.

Проект використовує мову програмування PHP для розробки серверної частини, базу даних MySQL для зберігання нотаток та HTML/CSS/JavaScript для розробки користувацького інтерфейсу. Використовуються різні технології та фреймворки, такі як Bootstrap, для створення зручного та привабливого вигляду.

## Ініціалізація проекту

Для належного налаштування та запуску проекту, слід виконати наступні кроки:

1. Виконати команду `composer install`, щоб встановити всі залежності проекту.

2. Імпортувати базу даних. Виконати SQL-скрипт,mysql -u your_username -p your_database_name < notes.sql який міститься в файлі `notes.sql`, для створення та наповнення бази даних.

3. Створити файл `db.configs.php` у папці application/Config проекту і вказати налаштування підключення до бази даних. Приклад наведено 
в файлі application/Config/db.configs.php.exemple

4. Запустіть веб-сервер і відкрийте головну сторінку проекту в браузері. Тепер ви можете реєструватись, створювати нотатки та користуватись усіма функціями системи управління нотатками.

Цей проект надає зручний спосіб організації нотаток і забезпечує важливий інструмент для керування інформацією. Він може бути використаний як основа для подальшого розширення та розвитку залежно від ваших потреб і вимог.
update for test git action latest
