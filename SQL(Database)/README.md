# New Changes

## 'test_users' table

>ALTER TABLE `test_users` CHANGE `notid_status` `notid_status` INT(1) NOT NULL;

>ALTER TABLE `test_users` ADD `status` INT(1) NOT NULL AFTER `notid_status`;

## 'test_blog' table

>ALTER TABLE `test_blog` ADD `status` INT(1) NOT NULL AFTER `publogo`;