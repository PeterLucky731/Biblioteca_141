create database biblioteca_1234;
use biblioteca_1234;

create table usuario(
	id int primary key auto_increment,
	nome varchar(80) not null,
    email varchar(80) not null,
    senha varchar(20),
    data_nasc date
);

CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,    
    isbn VARCHAR(13) UNIQUE NOT NULL,
    genero VARCHAR(100) NOT NULL,
    status ENUM('disponivel', 'emprestado') DEFAULT 'disponivel' NOT NULL
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

-- insert into livro(titulo, autor, genero, descicao) values ("","","","");
