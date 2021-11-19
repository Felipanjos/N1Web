use fast_cantinas;

alter table pessoa drop constraint pessoa_ibfk_1;
alter table responsavel drop constraint responsavel_ibfk_1;
alter table aluno drop constraint aluno_ibfk_1;
alter table aluno drop constraint aluno_ibfk_2;
alter table deposito drop constraint deposito_ibfk_1;


alter table responsavel drop column idpessoa;
alter table pessoa drop column idusuario;
alter table aluno drop column idpessoa;
alter table aluno drop column idresponsavel;
alter table deposito drop column idaluno;

drop table pessoa;
drop table responsavel;
drop table aluno;
drop table deposito;
drop table usuario;