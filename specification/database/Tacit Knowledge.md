# Tacit Knowledge
Tacit Knowledge table.

```sql
CREATE TABLE tacit_knowledge (
	`id` INT NOT NULL AUTO_INCREMENT,
    `category` VARCHAR(255) NULL,
    `title` VARCHAR(255) NULL,
	`content` TEXT NULL,
    `status` TINYINT NULL,
    `creator_id` INT NULL,
    `created_at` TIMESTAMP NULL,
	PRIMARY KEY (`id`)
);
```