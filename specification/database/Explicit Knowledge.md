# Explicit Knowledge
Explicit Knowledge table.

```sql
CREATE TABLE explicit_knowledge (
	`id` INT NOT NULL AUTO_INCREMENT,
    `category` VARCHAR(255) NULL,
    `title` VARCHAR(255) NULL,
	`content` TEXT NULL,
    `file` VARCHAR (50) NULL,
    `original_file_name` TEXT NULL,
    `description` TEXT NULL,
    `status` TINYINT NULL,
    `validate_code` INT NULL,
    `creator_id` INT NULL,
    `created_at` TIMESTAMP NULL,
    `updater_id` INT NULL,
    `updated_at` TIMESTAMP NULL,
	PRIMARY KEY (`id`)
);
```

## Validate Code
| Code | Name |
| ---- | ---- |
| 0 | Not Validated |
| 1 | Validated |
| 2 | Rejected |