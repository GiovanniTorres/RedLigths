-- Users table
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `password` VARCHAR(255) DEFAULT NULL, -- Only if using normal password authentication
    `google_id` VARCHAR(255) DEFAULT NULL, -- Google ID if using Google Login
    `facebook_id` VARCHAR(255) DEFAULT NULL, -- Facebook ID if using Facebook Login
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Projects table
CREATE TABLE IF NOT EXISTS `projects` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT, -- Foreign key relation with users
    `title` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `status` ENUM('active', 'inactive', 'completed') DEFAULT 'active',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
);

-- Comments table
CREATE TABLE IF NOT EXISTS `comments` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT, -- Foreign key relation with users
    `project_id` INT, -- Foreign key relation with projects
    `comment` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
    FOREIGN KEY (`project_id`) REFERENCES `projects`(`id`) ON DELETE CASCADE
);

-- Likes table for projects
CREATE TABLE IF NOT EXISTS `likes` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT, -- Foreign key relation with users
    `project_id` INT, -- Foreign key relation with projects
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
    FOREIGN KEY (`project_id`) REFERENCES `projects`(`id`) ON DELETE CASCADE,
    CONSTRAINT unique_like UNIQUE (`user_id`, `project_id`) -- A user can only like a project once
);

-- Shares table for projects
CREATE TABLE IF NOT EXISTS `shares` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT, -- Foreign key relation with users
    `project_id` INT, -- Foreign key relation with projects
    `platform` VARCHAR(255) NOT NULL, -- e.g., Facebook, Twitter, etc.
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
    FOREIGN KEY (`project_id`) REFERENCES `projects`(`id`) ON DELETE CASCADE
);

-- Authentication tokens table (for external API use)
CREATE TABLE IF NOT EXISTS `api_tokens` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT, -- Foreign key relation with users
    `token` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `expires_at` TIMESTAMP NOT NULL, -- Expiry date for the token
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
);
