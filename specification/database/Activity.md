# Activity
Activity table.

```sql
CREATE TABLE activity (
	`id` INT NOT NULL AUTO_INCREMENT, 
    `user_id` INT NULL,
	`message` TEXT NULL,
    `created_at` TIMESTAMP NULL,   
	PRIMARY KEY (`id`)
);
```