# Notification
Notification table.

```sql
CREATE TABLE `notification` (
	`id` INT NOT NULL AUTO_INCREMENT,
    `user_id` INT NULL,
    `knowledge_id` INT NULL,
    `title` VARCHAR(255) NULL,
    `content` TEXT NULL,
    `is_tacit` TINYINT NULL,
    `is_read` TINYINT NULL,    
    `created_at` TIMESTAMP NULL,
	PRIMARY KEY (`id`)
);
```