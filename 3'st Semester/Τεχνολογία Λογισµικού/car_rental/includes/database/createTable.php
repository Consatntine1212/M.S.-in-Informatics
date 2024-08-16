<?php

require_once 'database.php';

$db = new Database();

// user table
$db->createTable('users', 'id SERIAL PRIMARY KEY, username VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL,fullname VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, pic VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, birth_date DATE NOT NULL, type ENUM(\'client\',\'owner\') NOT NULL');

// cars table
$db->createTable('cars', 'id SERIAL PRIMARY KEY, owner_id BIGINT UNSIGNED NOT NULL REFERENCES users(id), brand VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, cubic_meter float NOT NULL, year INT NOT NULL, price VARCHAR(255) NOT NULL, description TEXT NOT NULL, pic VARCHAR(255) NOT NULL, availability BOOLEAN NOT NULL, availability_date DATETIME NOT NULL,availability_place VARCHAR(255) NOT NULL');

// rentals table
$db->createTable('rentals', 'id SERIAL PRIMARY KEY, client_id BIGINT UNSIGNED NOT NULL REFERENCES users(id), car_id BIGINT UNSIGNED NOT NULL REFERENCES cars(id),start_date DATE NOT NULL, end_date DATE NOT NULL, price VARCHAR(255) NOT NULL, description TEXT NOT NULL, status ENUM(\'pending\',\'approved\',\'declined\',\'finished\') NOT NULL');

// reviews table
$db->createTable('reviews', 'id SERIAL PRIMARY KEY, reviewer BIGINT UNSIGNED NOT NULL REFERENCES users(id),to_id BIGINT UNSIGNED NOT NULL REFERENCES users(id), rental_id BIGINT UNSIGNED NOT NULL REFERENCES rentals(id), review TEXT NOT NULL, stars INT NOT NULL, date DATE NOT NULL');

// driving_licenses table
$db->createTable('driving_licenses', 'id INT AUTO_INCREMENT PRIMARY KEY, client_id BIGINT UNSIGNED NOT NULL REFERENCES users(id), type VARCHAR(10) NOT NULL, issue_date DATE NOT NULL');