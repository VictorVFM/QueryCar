DROP DATABASE IF EXISTS query_car;
CREATE DATABASE query_car CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
use query_car;

CREATE TABLE Usuario (
  id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  usuario VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  foto longblob DEFAULT NULL,
  tipo_foto VARCHAR(50) DEFAULT NULL,
  senha VARCHAR(255) NOT NULL
)