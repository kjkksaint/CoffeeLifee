CREATE DATABASE coffeelifee1332;

create table usuarios (
	usuario_id serial PRIMARY KEY,
    email varchar(80) NOT NULL,
    nome varchar(80) NOT NULL,
    data_cadastro DATETIME NOT NULL
);
