CREATE DATABASE quadrados_db;

USE quadrados_db;

CREATE TABLE quadrados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    medida FLOAT NOT NULL,
    unidade VARCHAR(10) NOT NULL,
    cor VARCHAR(20) NOT NULL,
    lado FLOAT NOT NULL
);
