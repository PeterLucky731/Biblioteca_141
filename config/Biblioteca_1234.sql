create database biblioteca_1234;
use biblioteca_1234;

create table usuario(
	id int primary key auto_increment,
	nome varchar(80) not null,
    email varchar(80) not null,
    senha varchar(20),
    data_nasc date
);

create table livro(
	id int primary key auto_increment,
	titulo varchar(100),
    autor varchar(100),
    descricao varchar(300),
    isbn varchar(13),
    genero varchar(100),
    statusLivro enum('disponivel', 'emprestado') default 'disponivel' not null
);

create table emprestimo(
	id int primary key auto_increment,
    data_emprestimo date,
    id_usuario int,
    id_livro int,
	foreign key (id_usuario) references usuario(id),
    foreign key (id_livro) references livro(id)   
);

create table devolucao(
	id int primary key auto_increment,
    data_devolucao date,
    id_emprestimo int,
    id_usuario int,
    id_livro int,
	foreign key (id_usuario) references usuario(id),
    foreign key (id_livro) references livro(id),
    foreign key (id_emprestimo) references emprestimo(id)
);


