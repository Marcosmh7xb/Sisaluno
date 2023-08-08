-- drop database sisaluno;

create database sisaluno;

use sisaluno;

create table professor (
id smallint primary key auto_increment,
nome varbinary(100),
cpf varchar (15),
idade smallint,
datanascimento date,
endereco varchar(100),
estatus char (20)
);

create table disciplina(
id smallint primary key auto_increment,
nomedisciplina varchar (100),
ch char(10),
semestre varchar(10),
idprofessor smallint
);

create table aluno(
id smallint primary key auto_increment,
nome varchar(100),
idade  smallint,
datanascimento date,
endereco varchar(100),
estatus char(20),
matricula varchar (30)
);