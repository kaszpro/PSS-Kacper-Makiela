-- 1) Tworzenie bazy danych (tylko jeśli nie istnieje)
CREATE DATABASE IF NOT EXISTS oceniamy_filmy
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

-- 2) Wybór bazy
USE oceniamy_filmy;

-- 3) Tabela: USERS (użytkownicy)
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 4) Tabela: MOVIES (filmy)
CREATE TABLE IF NOT EXISTS `movies` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `release_year` INT,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 5) Tabela: REVIEWS (recenzje)
CREATE TABLE IF NOT EXISTS `reviews` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `movie_id` INT NOT NULL,
    `rating` TINYINT NOT NULL,        -- np. skala ocen 1-10
    `comment` TEXT,                   -- komentarz do filmu
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    -- Połączenie z tabelą users
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    -- Połączenie z tabelą movies
    FOREIGN KEY (`movie_id`) REFERENCES `movies`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Na tym etapie masz 3 tabele: users, movies i reviews.
-- Możesz je oczywiście rozszerzać o dodatkowe pola.
