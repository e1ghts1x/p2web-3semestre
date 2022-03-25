CREATE DATABASE form_game2;
USE form_game2;

CREATE TABLE usuario(
    id_usuario int not null primary key AUTO_INCREMENT,
    usuario varchar(30) not null UNIQUE,
    senha varchar(35) not null);
    
INSERT INTO usuario(usuario, senha) VALUES ('emanuel', md5('admin'));