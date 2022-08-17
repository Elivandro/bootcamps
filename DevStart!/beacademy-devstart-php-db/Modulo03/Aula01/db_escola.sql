-- Para criar um banco de dados; --

CREATE DATABASE db_escola;

-- Selecionar o banco de dados; --

USE db_Name;

-- Cria a Tabela; --

CREATE TABLE tb_Professor (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE tb_Aluno (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    matricula varchar(10) NOT NULL
);

CREATE TABLE tb_Curso (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cargaHoraria VARCHAR(10) NOT NULL,
    professorId INT (11) UNIQUE NOT NULL
);

-- Insere dados na tabela; --
INSERT INTO tb_Professor (nome, email, cpf) VALUES ("Alessandro", "ale@email.com", "12312312312" );
INSERT INTO tb_Professor (nome, email, cpf) VALUES ("Regis", "regis@email.com", "32321321321" );
INSERT INTO tb_Professor (nome, email, cpf) VALUES ("Luan", "luan@email.com", "23646546546" );



-- mostrar tabelas; --
SHOW TABLES;

-- seleciona os dados da tabela; --
SELECT * FROM tb_Name;

-- deleta dados em uma tabela; --
DELETE FROM tb_Name WHERE ID = 3;

-- deletar tabela; --
DROP TABLE tb_Name;

-- deletar banco de dados; --
DROP DATABASE db_Name;
