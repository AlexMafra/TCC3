drop database if exists eco;
CREATE DATABASE eco; 
use eco;


create table produto
(
	codigo 		integer primary key,
	nome 	varchar(40) not null,
	idimagem	int,
	descricao varchar (100),
	disponivel	boolean 	not null default true,
	idusuario integer not null
);

create table usuario
(
	idusuario 	integer primary key,
	nomeuser	varchar (20),
	nome		varchar(40) not null,
	senha		varchar(15) not null,
	email		varchar(40) not null,
	telefone	integer,
	cep			int
)
;

CREATE TABLE `fotos` (
 id int(10) unsigned NOT NULL AUTO_INCREMENT,
 nome varchar(60) NOT NULL,
 conteudo mediumblob NOT NULL,
 tipo varchar(20) NOT NULL,
 tamanho int(10) unsigned NOT NULL,
 idprod int(5),
 PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE interesse
(
idinteressado int,
idprointersse int,
iddono int,
idprodofertado int,
traberta	boolean 	not null default true

);
insert into usuario values (1,'mbelo','Marcio Belo','patasdegalinha1','mbelo@gmail.com',3333-4444, 31000-000);
insert into usuario values (2,'jamile','Jamile','patasdegalinha1','mbelo@gmail.com',3333-4444, 31000-000);

