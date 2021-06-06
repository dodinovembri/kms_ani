# Users
Users table.

```sql
CREATE TABLE chat (
	`id` INT NOT NULL AUTO_INCREMENT,
    `send_to_id` VARCHAR(50) NULL,
    `send_by_id` VARCHAR(100) NULL,
	`message` TEXT NULL,
    `created_at` TIMESTAMP NULL,   
	PRIMARY KEY (`id`)
);
```