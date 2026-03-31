CREATE TABLE roles (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(100));
INSERT INTO roles (name) VALUES ('Super Admin'),('Admin'),('Campaign Manager'),('Viewer');
CREATE TABLE users (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(255), email VARCHAR(255), password VARCHAR(255), is_active TINYINT(1) DEFAULT 1);
INSERT INTO users (name,email,password,is_active) VALUES ('Super Admin','admin@queue.liveblog365.com','$2y$12$7d2NHr3iGa9l1DlvKGVKBuEDP10cp2FvRvRavf8Pmj8Fh1qXkQh6i',1);
CREATE TABLE system_settings (id INT PRIMARY KEY AUTO_INCREMENT, `key` VARCHAR(191), `value` TEXT);
INSERT INTO system_settings (`key`,`value`) VALUES ('app_name','SendBulk'),('app_url','https://queue.liveblog365.com');
