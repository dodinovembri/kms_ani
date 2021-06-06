# Tacit Knowledge
Tacit Knowledge table.

```sql
CREATE TABLE tacit_knowledge (
	`id` INT NOT NULL AUTO_INCREMENT,
    `knowledge_category_id` INT NULL,
    `title` VARCHAR(255) NULL,
	`content` TEXT NULL,
    `is_visible_to_visitor` TINYINT NULL,
    `is_tacit` TINYINT DEFAULT(1),
    `status` TINYINT NULL,
    `creator_id` INT NULL,
    `created_at` TIMESTAMP NULL,
    `updater_id` INT NULL,
    `updated_at` TIMESTAMP NULL,
	PRIMARY KEY (`id`)
);
```

## Status
| Code | Name |
| ---- | ---- |
| 0 | Not Validated |
| 1 | Accepted/ Validated by Admin |
| 2 | Waiting Validate |
| 3 | Rejected by Admin |
| 4 | Accepted/ Validated by Kasi |
| 5 | Rejected by Kasi |