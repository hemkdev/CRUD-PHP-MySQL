CREATE DATABASE crud;

USE crud;

CREATE TABLE usuario (
    ID_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome_usuario VARCHAR(45) NOT NULL UNIQUE,
    senha_usuario VARCHAR(45) NOT NULL
) 