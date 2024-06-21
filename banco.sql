--entrar no mysql
mysql -u root


--criar banco de dados
create datbase aula5;

--vizualizar banco de dados
show databases;

--conectar um banco especifico
use aula5;

--criar tabela para receber os dados
create table cliente(
   idcliente int primary key auto_increment,
   nome varchar (30),
   email varchar (30),
   idade int,
   estadocivil varchar(20)
   );
   
   