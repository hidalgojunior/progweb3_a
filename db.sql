-- apagando se existir a base de dados
DROP DATABASE gestao_3a;

-- criando a base de dados
CREATE DATABASE gestao_3a;

-- colocando em uso a base
USE gestao_3a;

-- criando a tabela de usuarios
CREATE TABLE usuarios(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nomeCompleto VARCHAR(200) NOT NULL,
	login VARCHAR(50) NOT NULL,
	senha VARCHAR(32) NOT NULL,
	nivel INT NOT NULL, -- 0 - eu, 1 - administrador, 2 - secretaria, 3 - livre
	dataCriacao TIMESTAMP DEFAULT NOW(),
	dataAlteracao TIMESTAMP
	);