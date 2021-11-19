create table usuario (
	id int unique not null auto_increment primary key, 
	login varchar(45) not null unique,
	senha varchar(45) not null,
	tipo varchar(20) not null
);

create table pessoa (
	id int unique not null auto_increment primary key,
	nome varchar(45) not null,
	telefone varchar(45) not null,
	email varchar(45) not null, 
	idusuario int not null,
	constraint foreign key (idusuario) references usuario(id) on delete cascade 
) ENGINE=InnoDB;

create table responsavel (
	id int unique not null auto_increment primary key,
	cpf varchar(15) not null,
	idpessoa int not null,
	constraint foreign key (idpessoa) references pessoa(id) on delete cascade
) ENGINE=InnoDB;

create table aluno (
	id int unique not null auto_increment primary key, 
	matricula varchar(45) not null,
	turma varchar(10) not null,
	turno varchar(15) not null,
	saldo float not null,
	idpessoa int not null,
	idresponsavel int not null,
	constraint  foreign key (idpessoa) references pessoa(id) on delete cascade,
	constraint foreign key (idresponsavel) references responsavel(id) on delete cascade
) ENGINE=InnoDB;

create table deposito (
	id int unique not null auto_increment primary key, 
	data date not null,
	valor float not null,
	idaluno int not null,
	constraint foreign key (idaluno) 
		references aluno(id)
		on delete cascade
) ENGINE=InnoDB;

insert into usuario (login, senha, tipo) values ("admin", "123", "funcionario");
insert into usuario (login, senha, tipo) values ("jorgemachado21", "123", "responsavel");
insert into usuario (login, senha, tipo) values ("juniormachado", "123", "aluno");
insert into usuario (login, senha, tipo) values ("auroramhc82", "123", "responsavel");

insert into pessoa (nome, telefone, email, idusuario) values ("Jorge Machado de Souza", "(71) 988898313", "machadojorge1980@gmail.com", "2");
insert into pessoa (nome, telefone, email, idusuario) values ("Junior Machado de Lima", "(71) 984212890", "juninhomachado@gmail.com", "3");
insert into pessoa (nome, telefone, email, idusuario) values ("Aurora Melissa Heloisa Cavalcanti", "(91) 998656452", "auroramelissaheloisa-82@sercoti.com.br", "4");

insert into responsavel (cpf, idpessoa) values ("025.797.265-00", "1");
insert into responsavel (cpf, idpessoa) values ("335.772.900-80", "3");

insert into aluno (idpessoa, matricula, turma, turno, saldo, idresponsavel) values
(2, "30008429", "401A", "Matutino", "30", 1);

insert into deposito (data, valor, idaluno) values ("2021-08-25", 200, 1);
insert into deposito (data, valor, idaluno) values ("2021-07-12", 150, 1);