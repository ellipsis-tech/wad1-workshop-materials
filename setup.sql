CREATE DATABASE IF NOT EXISTS `ellipsis-wad1-workshop`;

USE `ellipsis-wad1-workshop`;

CREATE TABLE IF NOT EXISTS `users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL,
    `password` VARCHAR(255) NOT NULL, -- Storing hashed passwords
    `is_admin` BOOLEAN NOT NULL DEFAULT FALSE,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `username_UNIQUE` (`username` ASC)
);

-- Inserting some sample data
INSERT INTO `users` (`username`, `password`, `is_admin`) VALUES
('user1', MD5('password1'), FALSE),
('admin', MD5('adminpass'), TRUE);

CREATE TABLE IF NOT EXISTS `posts` (
    `post_id` INT NOT NULL AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `content` TEXT NOT NULL,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`post_id`),
    FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
);