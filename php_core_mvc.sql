create database php_core_mvc;

use php_core_mvc;


--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
-- 1. Creating the 'product' table
CREATE TABLE product (
    id INT AUTO_INCREMENT,
    product_name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    img_location VARCHAR(255) NOT NULL,
    created_date DATETIME NOT NULL,
    updated_date DATETIME,
    deleted_date DATETIME,
    PRIMARY KEY (id)
);
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
-- 2. Creating the 'services' table
CREATE TABLE services (
    id INT AUTO_INCREMENT,
    service_name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    img_location VARCHAR(255) NOT NULL,
    created_date DATETIME NOT NULL,
    updated_date DATETIME,
    deleted_date DATETIME,
    PRIMARY KEY (id)
);
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
-- 3. Creating the 'user' table
CREATE TABLE user (
    id INT AUTO_INCREMENT,
    full_name VARCHAR(255) NOT NULL,
    user_name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    img_location VARCHAR(255) NOT NULL,
    created_date DATETIME NOT NULL,
    updated_date DATETIME,
    deleted_date DATETIME,
    PRIMARY KEY (id)
);

--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
-- 4. Creating the 'contact_us' table
CREATE TABLE contact_us (
    id INT AUTO_INCREMENT,
    priviledges BOOLEAN,
    service_name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    created_date DATETIME NOT NULL,
    updated_date DATETIME,
    deleted_date DATETIME,
    PRIMARY KEY (id)
);

--------------------------------------------------------------------------------
--------------------------------------------------------------------------------