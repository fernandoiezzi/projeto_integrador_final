create database if not exists first_work;

use first_work;


create table if not exists usuario(
id int primary key auto_increment,
nome varchar(200) not null,
CPF varchar(100) not null,
telefone varchar(100) not null,
Data_nascimento date not null,
Endereco varchar(200) not null,
Bairro varchar(200) not null,
Estado varchar(100) not null,
email varchar(100) not null,
descr varchar(200) not null,
img varchar(100) not null,
rede_social varchar(100));


create table if not exists empresa(
id int primary key auto_increment,
CNPJ varchar(100) not null,
nome varchar(200) not null,
Local varchar(100) not null,
Hora_Funcionamento Int not null,
Logo varchar(100) not null);

create table if not exists vaga(
id int primary key auto_increment,
Cargo varchar(100) not null,
Salario Float not null,
carga_horaria Int not null,
Requisitos varchar(250) not null,
id_usuario int not null,
id_emp int not null,
foreign key(id_usuario) references first_work.usuario(id),
foreign key(id_emp) references first_work.empresa(id));

create table if not exists log_vaga(
id int primary key auto_increment,
data_cadastro datetime,
reg_cnpj int not null,
reg_vaga int not null,
foreign key (reg_cnpj) references first_work.empresa(id),
foreign key (reg_vaga) references first_work.vaga(id));