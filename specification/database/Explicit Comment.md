# Explicit Comment
Explicit Comment table.

```sql
CREATE TABLE explicit_comment (
	`id` INT NOT NULL AUTO_INCREMENT,
    `explicit_knowledge_id` INT NULL,
	`content` TEXT NULL,
    `creator_id` INT NULL,
    `created_at` TIMESTAMP NULL,
	PRIMARY KEY (`id`)
);
```