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
('user1', "$2y$10$m/OIBHW01if8jtPsBCBSBeaSnlGruAE9Bu6WKj./aYshM2WPlXORm", FALSE),
('admin', "$2y$10$HIU5RO7hDbrPzGaEUk4HYuIKEC6BoORKXOuiCdE5tA0MM8.YaNP7.", TRUE);

CREATE TABLE IF NOT EXISTS `posts` (
    `post_id` INT NOT NULL AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `content` TEXT NOT NULL,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`post_id`),
    FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
);