# Help Comment
Help Comment table.

```sql
CREATE TABLE help_comment (
	`id` INT NOT NULL AUTO_INCREMENT,
    `help_id` INT NULL,
	`content` TEXT NULL,
    `creator_id` INT NULL,
    `created_at` TIMESTAMP NULL,
	PRIMARY KEY (`id`)
);
```