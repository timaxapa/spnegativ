-- Скрипты создания базы даных

-- Создание теблицы общих настроек
CREATE TABLE `settings`
(
    `site_available` TINYINT NOT NULL DEFAULT 1
);


-- Создание таблицы пользователей
CREATE TABLE `users`
(
    `id`        INT UNSIGNED NOT NULL,
    `login`     VARCHAR(50) NOT NULL,
    `password`  VARCHAR(32) NOT NULL,
    `avatar`    INT UNSIGNED NULL
);