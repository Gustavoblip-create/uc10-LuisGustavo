CREATE DATABASE escola_luis;

USE escola_luis

CREATE TABLE alunos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome CHAR(70) NOT NULL,
    idade INT (3) NOT NULL,
    uf char(2) NOT NULL,
    cidade CHAR(50) NULL
);

INSERT INTO alunos(nome,idade,uf,cidade)
VALUES('luis','26','sp','marilia'),
	  ('chaves','12','mg','contagem'),
	  ('madruga','40','rj','volta redonda')

SELECT id, nome, idade, uf, cidade FROM alunos;
