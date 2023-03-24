#----------------------------CRIAÇÃO DO BANCO DE DADOS----------------------------------
create database formulario_tcc
default character set utf8
default collate utf8_general_ci;
#----------------------------SELECIONA BANCO DE DADOS A SER USADO-----------------------
use formulario_tcc;
#----------------------------CRIAÇÃO DE TABELAS-----------------------------------------
create table usuario(
    nomeDeUsuario varchar(12),
    senha varchar(12),
    nome varchar(90),
    email varchar(45),
    matricula varchar(12),
    sexo enum('M', 'F', 'O'),
    dataNascimento date,
    primary key (nomeDeUsuario)
)default charset = utf8;

create table avaliacao(
    id int auto_increment,
    nomeDeUsuario varchar(12),
    pratoPrincipal varchar(9),
    acompanhamento varchar(9),
    guarnicao varchar(9),
    salada varchar(9),
    sobremesa varchar(9),
    opiniaoValorRefeicao varchar(9),
    opiniaoValorJusto float default NULL,
    tempoFila varchar(9),
    sugestao longtext,
    data date,
    constraint fk_usuario_nomeUsuario foreign key (nomeDeUsuario) references usuario(nomeDeUsuario),
    primary key (id)
)default charset = utf8;

create table administrador(
    nomeUsuarioAdministrador varchar(12),
    senha varchar(12),
    nome varchar(45),
    email varchar(45),
    siape varchar(7),
    primary key (nomeUsuarioAdministrador)
)default charset = utf8;

#--------------------------------INSERINDO USUARIO ADMINISTRADOR NA TABELA--------------------------

insert into administrador values ('admin', 'unifesspa', 'nutricionista', 'nutricionista@unifesspa.edu.br', '1234567');

#--------------------------------IMPRESSÃO COMPLETA DAS TABELAS--------------------------
select * from avaliacao;
select * from usuario;
select * from administrador;
use formulario_tcc;
