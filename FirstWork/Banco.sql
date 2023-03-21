create database if not exists first_work;

use first_work;


create table if not exists usuario(
id int primary key auto_increment,
nome varchar(200),
CPF varchar(100),
telefone varchar(100),
Data_nascimento date,
formacao varchar (300),
Endereco varchar(200),
Bairro varchar(200),
Estado varchar(100),
email varchar(100),
descr varchar(200),
img varchar(100),
rede_social varchar(100));


create table if not exists empresa(
id int primary key auto_increment,
CNPJ varchar(100),
nome varchar(200),
Local varchar(100),
Hora_Funcionamento varchar(100),
Logo varchar(100) not null);

create table if not exists vaga(
id int primary key auto_increment,
Cargo varchar(100) not null,
Salario Float not null,
carga_horaria Int not null,
Requisitos varchar(250) not null,
id_usuario Int,
id_emp Int,
Categoria varchar(100) not null,
foreign key(id_usuario) references first_work.usuario(id),
foreign key(id_emp) references first_work.empresa(id));

create table if not exists log_vaga(
id int primary key auto_increment,
data_cadastro datetime,
reg_cnpj int not null,
reg_vaga int not null,
foreign key (reg_cnpj) references first_work.empresa(id),
foreign key (reg_vaga) references first_work.vaga(id));