# Tacit Knowledge
Tacit Knowledge table.

```sql
CREATE TABLE tacit_knowledge (
	`id` INT NOT NULL AUTO_INCREMENT,
    `category` VARCHAR(255) NULL,
    `title` VARCHAR(255) NULL,
	`content` TEXT NULL,
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
| 1 | Accepted/ Validated by Admin |
| 2 | Rejected by Admin |
| 3 | Accepted/ Validated by Kasi |
| 4 | Rejected by Kasi |