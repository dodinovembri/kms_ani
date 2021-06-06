# Tacit Comment
Tacit Comment table.

```sql
CREATE TABLE tacit_comment (
	`id` INT NOT NULL AUTO_INCREMENT,
    `tacit_knowledge_id` INT NULL,
	`content` TEXT NULL,
    `creator_id` INT NULL,
    `created_at` TIMESTAMP NULL,
	PRIMARY KEY (`id`)
);
```