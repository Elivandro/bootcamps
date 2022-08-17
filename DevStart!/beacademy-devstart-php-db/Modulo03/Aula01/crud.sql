--selectiona database;
USE db_escola;

-- insere um registro;
INSERT INTO tb_Professor(nome, cpf, email) VALUES ("Chiquinho", "12365478912", "chico@email.com");

-- insere multiplos registros;
INSERT INTO tb_Professor(nome, cpf, email) 
VALUES 
("Chiquinho", "16545547891", "chico@email.com"),
("Jose", "65456478912", "jose@email.com"),
("Maria", "89766514912", "maria@email.com");

-- excluir um registro;
DELETE FROM tb_Professor WHERE id = '1';

-- excluir todos;
DELETE FROM tb_Professor;

-- editar um registro;
UPDATE tb_Professor SET nome = "Luizinho" WHERE id = "6"; 
UPDATE tb_Professor SET email = "luiz@email.com" WHERE nome = "Luizinho"; 

--editar todos;
UPDATE tb_Professor SET nome = "Francisco";

--seleciona todos os dados;
SELECT * FROM tb_Professor;

-- seleciona todos os dados de um campo especifico;
SELECT * FROM tb_Professor WHERE id = '4';

-- seleciona TODOS dados especificos de uma tabela;
SELECT nome, cpf FROM tb_Professor;