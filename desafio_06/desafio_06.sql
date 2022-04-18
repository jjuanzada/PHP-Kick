create database escola_db;

use escola_db;

create table aluno(
    nome varchar(45),
    cpf varchar(20),
    nascimento date,
    genero char(1)
);

create table disciplina(
    codigo int(11),
    nome varchar(20),
    descricao text
);

create table professor(
    nome varchar(45),
    cpf varchar(20),
    nascimento date,
    genero char(1),
    formacao varchar(30)
);
