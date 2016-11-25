drop database if exists sgea;
CREATE DATABASE sgea; 
use sgea;


create table colaborador
(
	codigo 	int (4) NOT NULL primary key AUTO_INCREMENT,
	cpf 	varchar(11),
	nome 	varchar(40) not null,
	cargo	varchar (20),
	dataNascimento	 varchar (10),
	rg	varchar(9),
	sexo char(1),
	nacionalidade varchar (20),
	naturalidade varchar (20),
	telResid varchar(9),
	telCel	varchar(10),
	emailPessoal varchar(50),
	estadoCivil varchar (10),
	escolaridade varchar (60),
	emailCorporativo varchar (50),
	telCorporativo varchar (10),
	numeroOAB int (7),
	emissor varchar (10),
	senha varchar (50)
);

create table cliente
(
	codigo 	integer (4)NOT NULL primary key AUTO_INCREMENT,
	cpf 	varchar(11),
	nome 	varchar(40) not null,
	profissao	varchar (20),
	dataNascimento	 varchar (10),
	rg	varchar(9),
	sexo char(1),
	nacionalidade varchar (20),
	naturalidade varchar (20),
	telResid varchar(9),
	telCel	varchar(10),
	emailPessoal varchar(50),
	estadoCivil varchar (10),
	escolaridade varchar (60),
	emissor varchar (10),
	senha varchar (50)
);

create table endereco
(
	idusuario varchar (11)primary key,
	logradouro	varchar (60),
	complemento	varchar (60),
	bairro		varchar(35),
	cidade		varchar(40),
	uf			varchar (2),
	pais		varchar (15),
	cep			varchar(9)
);

create table agenda (
 idusuario varchar(11),
 dia integer,
 mes integer,
 ano integer,
 horario integer,
 cpfColaborador varchar(11),
 cpfCliente varchar(11)
);

create table financeiro(
numeroProcesso int,
idCliente int(4),
valor int,
idColaborador int(4),
titulo int
);

create table processo(
cpf varchar (11),
numero varchar (15),
comarca varchar (25),
vara varchar (15),
competencia varchar (25),
assunto varchar (15),
advogado varchar (11),
origem varchar(25)
);

CREATE TABLE fotos (
 id integer (4)NOT NULL primary key AUTO_INCREMENT,
 nome varchar(60) NOT NULL,
 conteudo mediumblob NOT NULL,
 tipo varchar(20) NOT NULL,
 tamanho int(10) unsigned NOT NULL,
 tipoDoc varchar(20),
 idCliente int(11)
);

create table atendimento(
cpfCliente 	varchar(11),
cpfColaborador 	varchar(11)
);
