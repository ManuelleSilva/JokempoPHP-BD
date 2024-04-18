CREATE DATABASE banco;
USE banco;

CREATE TABLE Jogadas (
    nome VARCHAR(25),
    escolha VARCHAR(1),
    maquina VARCHAR(1),
    vitorias INT(5),
    derrotas INT(5),
    empates INT(5)
);