create database compras_db;

use compras_db;

create table clientes(
    id int not null auto_increment,
    nome varchar(100),
    nacionalidade varchar(30),
    cpf varchar(14) not null,
    nascimento date,
    genero enum('m', 'f', 'o'),
    id_produto int,
    primary key (id)
);

create table produtos(
    id int not null auto_increment,
    nome varchar(20),
    modificado date,
    descricao text,
    primary key (id)
);

alter table clientes add foreign key (id_produto) references produtos(id);