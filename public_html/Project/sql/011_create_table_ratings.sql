CREATE TABLE IF NOT EXISTS `Ratings` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `product_id` INT NOT NULL,
    `user_id` INT NOT NULL,
    `rating` decimal(2,1) NOT NULL,
    `comment` text,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT CHK_Ratings CHECK (rating >= 0.0 AND rating <= 5.0),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`product_id`) REFERENCES Products(`id`),
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`)
)