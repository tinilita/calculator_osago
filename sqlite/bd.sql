-- database: sqlite3 calculator.sqlite

create table region
(
    id  INTEGER
        primary key,
    row TEXT
-- KOEFF INTEGER
);
-- Механизм транзакций для корректного внесения изменений в базу данных calculator.sqlite
BEGIN;
INSERT INTO region(id, row) VALUES(01, '- Республика Адыгея');
INSERT INTO region(id, row) VALUES(02, '- Республика Башкортостан');
INSERT INTO region(id, row) VALUES(03, '- Республика Бурятия');
INSERT INTO region(id, row) VALUES(04, '- Республика Алтай');
INSERT INTO region(id, row) VALUES(05, '- Республика Дагестан');
INSERT INTO region(id, row) VALUES(06, '- Республика Ингушетия');
INSERT INTO region(id, row) VALUES(07, '- Кабардино-Балкарская Республика');
INSERT INTO region(id, row) VALUES(08, '- Республика Калмыкия');
INSERT INTO region(id, row) VALUES(09, '- Карачаево-Черкесская Республика');
INSERT INTO region(id, row) VALUES(10, '- Республика Карелия');
INSERT INTO region(id, row) VALUES(11, '- Республика Коми');
INSERT INTO region(id, row) VALUES(12, '- Республика Марий Эл');
INSERT INTO region(id, row) VALUES(13, '- Республика Мордовия');
INSERT INTO region(id, row) VALUES(14, '- Республика Саха (Якутия)');
INSERT INTO region(id, row) VALUES(15, '- Республика Северная Осетия — Алания');
INSERT INTO region(id, row) VALUES(16, '- Республика Татарстан (Татарстан)');
INSERT INTO region(id, row) VALUES(17, '- Республика Тыва');
INSERT INTO region(id, row) VALUES(18, '- Удмуртская Республика');
INSERT INTO region(id, row) VALUES(19, '- Республика Хакасия');
INSERT INTO region(id, row) VALUES(20, '- Чеченская Республика');
INSERT INTO region(id, row) VALUES(21, '- Чувашская Республика — Чувашия');
INSERT INTO region(id, row) VALUES(22, '- Алтайский край');
INSERT INTO region(id, row) VALUES(23, '- Краснодарский край');
INSERT INTO region(id, row) VALUES(24, '- Красноярский край');
INSERT INTO region(id, row) VALUES(25, '- Приморский край');
INSERT INTO region(id, row) VALUES(26, '- Ставропольский край');
INSERT INTO region(id, row) VALUES(27, '- Хабаровский край');
INSERT INTO region(id, row) VALUES(28, '- Амурская область');
INSERT INTO region(id, row) VALUES(29, '- Архангельская область');
INSERT INTO region(id, row) VALUES(30, '- Астраханская область');
INSERT INTO region(id, row) VALUES(31, '- Белгородская область');
INSERT INTO region(id, row) VALUES(32, '- Брянская область');
INSERT INTO region(id, row) VALUES(33, '- Владимирская область');
INSERT INTO region(id, row) VALUES(34, '- Волгоградская область');
INSERT INTO region(id, row) VALUES(35, '- Вологодская область');
INSERT INTO region(id, row) VALUES(36, '- Воронежская область');
INSERT INTO region(id, row) VALUES(37, '- Ивановская область');
INSERT INTO region(id, row) VALUES(38, '- Иркутская область');
INSERT INTO region(id, row) VALUES(39, '- Калининградская область');
INSERT INTO region(id, row) VALUES(40, '- Калужская область');
INSERT INTO region(id, row) VALUES(41, '- Камчатский край');
INSERT INTO region(id, row) VALUES(42, '- Кемеровская область — Кузбасс');
INSERT INTO region(id, row) VALUES(43, '- Кировская область');
INSERT INTO region(id, row) VALUES(44, '- Костромская область');
INSERT INTO region(id, row) VALUES(45, '- Курганская область');
INSERT INTO region(id, row) VALUES(46, '- Курская область');
INSERT INTO region(id, row) VALUES(47, '- Ленинградская область');
INSERT INTO region(id, row) VALUES(48, '- Липецкая область');
INSERT INTO region(id, row) VALUES(49, '- Магаданская область');
INSERT INTO region(id, row) VALUES(50, '- Московская область');
INSERT INTO region(id, row) VALUES(51, '- Мурманская область');
INSERT INTO region(id, row) VALUES(52, '- Нижегородская область');
INSERT INTO region(id, row) VALUES(53, '- Новгородская область');
INSERT INTO region(id, row) VALUES(54, '- Новосибирская область');
INSERT INTO region(id, row) VALUES(55, '- Омская область');
INSERT INTO region(id, row) VALUES(56, '- Оренбургская область');
INSERT INTO region(id, row) VALUES(57, '- Орловская область');
INSERT INTO region(id, row) VALUES(58, '- Пензенская область');
INSERT INTO region(id, row) VALUES(59, '- Пермский край');
INSERT INTO region(id, row) VALUES(60, '- Псковская область');
INSERT INTO region(id, row) VALUES(61, '- Ростовская область');
INSERT INTO region(id, row) VALUES(62, '- Рязанская область');
INSERT INTO region(id, row) VALUES(63, '- Самарская область');
INSERT INTO region(id, row) VALUES(64, '- Саратовская область');
INSERT INTO region(id, row) VALUES(65, '- Сахалинская область');
INSERT INTO region(id, row) VALUES(66, '- Свердловская область');
INSERT INTO region(id, row) VALUES(67, '- Смоленская область');
INSERT INTO region(id, row) VALUES(68, '- Тамбовская область');
INSERT INTO region(id, row) VALUES(69, '- Тверская область');
INSERT INTO region(id, row) VALUES(70, '- Томская область');
INSERT INTO region(id, row) VALUES(71, '- Тульская область');
INSERT INTO region(id, row) VALUES(72, '- Тюменская область');
INSERT INTO region(id, row) VALUES(73, '- Ульяновская область');
INSERT INTO region(id, row) VALUES(74, '- Челябинская область');
INSERT INTO region(id, row) VALUES(75, '- Забайкальский край');
INSERT INTO region(id, row) VALUES(76, '- Ярославская область');
INSERT INTO region(id, row) VALUES(77, '- г. Москва');
INSERT INTO region(id, row) VALUES(78, '- Санкт-Петербург');
INSERT INTO region(id, row) VALUES(79, '- Еврейская автономная область');
INSERT INTO region(id, row) VALUES(83, '- Ненецкий автономный округ');
INSERT INTO region(id, row) VALUES(86, '- Ханты-Мансийский автономный округ — Югра');
INSERT INTO region(id, row) VALUES(87, '- Чукотский автономный округ');
INSERT INTO region(id, row) VALUES(89, '- Ямало-Ненецкий автономный округ');
INSERT INTO region(id, row) VALUES(91, '- Республика Крым');
INSERT INTO region(id, row) VALUES(92, '- Севастополь');
INSERT INTO region(id, row) VALUES(99, '- Иные территории, включая город и космодром Байконур');
COMMIT;

SELECT id, row FROM region;

SELECT row FROM region LIMIT 25