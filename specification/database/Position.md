# Position
Position table.

```sql
CREATE TABLE position (
	`id` INT NOT NULL AUTO_INCREMENT,
    `position_code` VARCHAR(20) NULL,
    `position_name` VARCHAR(255) NULL,
    `status` TINYINT NULL,
   	`created_at` TIMESTAMP NULL,
	`updated_at` TIMESTAMP NULL,
   	`creator_id` INT NULL,
	`updater_id` INT NULL,
	PRIMARY KEY (`id`)
);
```