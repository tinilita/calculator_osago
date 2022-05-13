# calculator_osago

Постановка задания:

Калькулятор ОСАГО. Пример: https://calcus.ru/kalkulyator-osago
Требования к заданию:

Задание должно быть оформлено в отдельном репозитории
Название репозитория task_<login>_calculator

Репозиторий должен содержать описание вашего задания: постановка, описание решения, описание всех файлов входящих в состав репозитория, ссылку на приложение на вашей ВМ. Разместить в файле README.md

В качестве базы используем SQLite
В системе контроля версий не должно быть директории vendor, файла базы данных, и любых временных файлов
В репозитории должны быть файлы SQL для создания таблиц и заполнения данными
Клиентская часть задания должна быть реализована на vue.js. Все изменения на странице должны выполнятся без перезагрузки страницы
Серверная часть должна быть написана на php версии 7+.
Код должен быть оформлен по PSR-12
Весь код должен быть задокументирован с phpdoc

Работа с БД должна использовать механизм транзакций
Все запросы с клиентской стороны должны логироваться с уровнем логирования debug
Все ошибки приложения должны логироваться с соответствующим уровнем логирования
Использование готовых пакетов установленных с использованием composer разрешается.
На клиентской стороне должна быть возможность сохранения файла в xlsx и pdf

Описание файлов входящих в состав репозитория:

Установка Для добавления необходимых библиотек нужно запустить установку пакетов с помощью команды $composer install

Требования к окружению PHP >=7.4
База данных SQLite3
Фронтенд фреймворк - vue.js

index.php содержит форму для внесения данных в калькулятор ОСАГО.
В папке sqlite находится bd.sql - бд и заполнение файлами
В папке js: scripts.js - код vue.js
В папке css: bootstrap.css
В папке logs/critical/ (log генерируется) критические состояния
В папке logs/debug/ (log генерируется) события для отладки какого-либо процесса в системе
В папке app классы для взаимодействия с бд


НЕ ДОРАБОТАН