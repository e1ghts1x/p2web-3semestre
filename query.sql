CREATE DATABASE "form_game2"
USE DATABASE "form_game2"

CREATE TABLE usuario{
    id_usuario int not null primary key AUTO_INCREMENT,
    usuario varchar("30") not null primary key,
    senha varchar("35") not null;
}