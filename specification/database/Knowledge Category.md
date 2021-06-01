# Knowledge Category
Tacit Knowledge table.

```sql
CREATE TABLE knowledge_category (
	`id` INT NOT NULL AUTO_INCREMENT,
    `category_code` VARCHAR(50) NULL,
    `category_icon` VARCHAR(255) NULL,
    `category_background` VARCHAR(255) NULL,
    `category_title` VARCHAR(255) NULL,  
    `category_description` TEXT NULL,  
    `status` TINYINT NULL,   
    `creator_id` INT NULL,
    `created_at` TIMESTAMP NULL,
    `updater_id` INT NULL,
    `updated_at` TIMESTAMP NULL,
	PRIMARY KEY (`id`)
);
```