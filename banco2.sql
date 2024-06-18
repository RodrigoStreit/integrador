CREATE DATABASE IF NOT EXISTS `database`;

USE database;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(128),
    password VARCHAR(128)
);

INSERT INTO users (user, password) VALUES ('Admin', '0000');

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product VARCHAR(128),
    price DOUBLE,
    quantity INT,
    type VARCHAR(32)
);
