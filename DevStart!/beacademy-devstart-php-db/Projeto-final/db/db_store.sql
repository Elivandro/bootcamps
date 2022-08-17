-- cria database;
CREATE DATABASE db_store;

-- seleciona a database;
USE db_store;

-- cria a tabela categoria; --
CREATE TABLE tb_category(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL
);

-- cria a tabela produto; --
CREATE TABLE tb_product(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(1000) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    price FLOAT(9,2) NOT NULL,
    quantity INT (5) NOT NULL,
    category_id INT (11) NOT NULL,
    created_at DATETIME NOT NULL
);

--cria a tabela usuarios; --
CREATE TABLE tb_users(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL,
    cpf VARCHAR(11) NOT NULL UNIQUE,
    email VARCHAR(80) NOT NULL,
    phone VARCHAR(11) NOT NULL,
    password VARCHAR(255) NOT NULL,
    superUser INT(11) NOT NULL DEFAULT 0,
    created_at DATETIME NOT NULL
);

INSERT INTO tb_category(name, description) VALUES
("Informática", "Mouse, Teclado, Cartão de memória, Pendrive, Cartucho de tinta, cartucho de toner, fita para impressão, Filtro de linha, Switch."),
("Escritório", "Calculadora, Envelopes personalizados, Etiquetas, Grampeador, Lápis e canetas, Mesas com divisórias, Organizadores, Papel A-4."),
("Eletronicos", "Smartphones, Televisoes, carregadores para celular, carregadores portáteis, celulares.");


INSERT INTO tb_product(name, description, photo, price, quantity, category_id, created_at)
VALUES
("Mouse Classic Box Óptico Full Black", "Mouse optico USB multilaser preto 1200DPI", "https://m.media-amazon.com/images/I/51mQPWCEQCL._AC_SX466_.jpg", 7.93, 34, 1, now()),
("Mesa de Escritório em L Estilo Industrial", "Mesa Amadeirada em L medindo 1,50mX1,50m por 0,75m de altura", "https://m.media-amazon.com/images/I/71vJtkqhn+L._AC_SX466_.jpg", 378.86, 7, 2, now()),

-- consulta fazendo relação de colunas; --
SELECT prod.id, prod.name, prod.description, prod.quantity, cat.name as category FROM tb_product prod INNER JOIN tb_category cat ON prod.category_id = cat.id;

-- altera uma coluna na tabela; --
ALTER TABLE tb_users MODIFY COLUMN password varchar(255) NOT NULL;

-- descreve a tabela; --
DESCRIBE tb_users;

-- deleta a tabela; --
DROP TABLE tb_users;