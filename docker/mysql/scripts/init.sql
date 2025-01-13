SET GLOBAL time_zone = 'UTC';
CREATE DATABASE IF NOT EXISTS `modx` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'modx'@'%' IDENTIFIED WITH mysql_native_password BY 'modx';
GRANT ALL ON *.* TO 'modx'@'%';

USE modx;