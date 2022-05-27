CREATE DATABASE form_game2;
USE form_game2;

#DROP DATABASE form_game2;

CREATE TABLE usuario(
    id_usuario int not null primary key AUTO_INCREMENT,
    usuario varchar(30) not null UNIQUE,
    nome varchar(30) not null,
    senha varchar(35) not null);
    
DELIMITER $$
CREATE PROCEDURE insereCadastro (IN procUsu varchar(30), IN procNome varchar(30), IN procSenha varchar(35))
BEGIN
	INSERT INTO usuario (usuario, nome, senha) VALUES (procUsu, procNome, procSenha);
END
$$


SELECT nome FROM usuario where usuario = "Emanuel";
select * from usuario;