CREATE DATABASE crud;
USE crud;

CREATE TABLE usuarios(
id INT UNSIGNED AUTO_INCREMENT NOT NULL,
nome VARCHAR(120) NOT NULL,
email VARCHAR(120) NOT NULL,
senha CHAR(10) NOT NULL,
PRIMARY KEY(id)
)ENGINE = INNODB;

INSERT INTO usuarios (id, nome, email, senha) VALUES(1, "Admin", "admin@email.com", "admin");

SELECT * FROM usuarios;