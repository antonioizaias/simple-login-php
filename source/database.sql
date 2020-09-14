CREATE DATABASE IF NOT EXISTS login;
USE login;

CREATE TABLE IF NOT EXISTS usuario(
	id SERIAL PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    login VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(12) NOT NULL
);

INSERT INTO usuario(nome, login, senha)
VALUES('Administrator', 'admin', 'password');