create database trab_agronomig;
use trab_agronomig;

create table vendedores(
cpf char(14) not null,
nome varchar(45) not null,
endereco varchar(90) not null,
telefone varchar(20) not null,
email varchar(30) not null,
usuario varchar(20) not null,
senha varchar(18) not null,
primary key(cpf)
);

create table cliente(
codigo int unsigned auto_increment not null,
nome varchar(45) not null,
cpf char(14) not null,
telefone varchar(20) not null,
endereco varchar(90) not null,
estado varchar(20) not null,
email varchar(30) not null,
usuario varchar(20) not null,
senha varchar(18) not null,
primary key(codigo)
);

create table produtos(
codigo int unsigned auto_increment not null,
nome varchar(45) not null,
tipo varchar(20) not null,
valor double(6,2) not null,
foto varchar(500) not null,
vendedores_cpf char(14) not null,
primary key(codigo),
foreign key(vendedores_cpf)REFERENCES vendedores(cpf)
);


create table tipo(
nome varchar(45) not null,
vendedores_cpf char(14) not null,
primary key (nome),
foreign key(vendedores_cpf)REFERENCES vendedores(cpf)
);



create table estoque(
codigo int unsigned auto_increment not null,
nome varchar(45) not null,
valor double(6,2) not null,
quantidade int not null,
foto varchar(150) not null,
vendedores_cpf char(14) not null,
produtos_codigo int not null,
primary key(codigo),
foreign key(vendedores_cpf)REFERENCES vendedores(cpf),
foreign key(produtos_codigo)REFERENCES produtos(codigo)
);


create table venda(
codigo int unsigned auto_increment not null,
total double(6,2) not null,
data date not null,
vendedores_cpf char(14) not null,
produtos_codigo int not null,
cliente_codigo int not null,
primary key(codigo),
foreign key(vendedores_cpf)REFERENCES vendedores(cpf),
foreign key(produtos_codigo)REFERENCES produtos(codigo),
foreign key(cliente_codigo)REFERENCES cliente(codigo)
);


create table mensagem(
codigo int unsigned auto_increment not null,
nome varchar(45),
email varchar(45),
telefone varchar(30),
mensagem varchar(200),
primary key(codigo)
);


/* inserindo nosso vendedor */
insert into vendedores(cpf,nome,endereco,telefone,email,usuario,senha)values('129.779.766-39','Admin','Rua Itajuba 223','(31)99229-7481','agronomig@gmail.com','Admin','123');

/*Inserindo cliente aleatorio*/
insert into cliente(codigo,nome,cpf,telefone,endereco,estado,email,usuario,senha)values(null,'Mario','125.897.316-20','(31)99910-7569','Rio Acima','MG','mariogodaoo@hotmail.com','mario','123');

/*Inserindo tipos do site*/
insert into tipo(nome,vendedores_cpf)values('Fruta','129.779.766-39');
insert into tipo(nome,vendedores_cpf)values('Semente','129.779.766-39');
insert into tipo(nome,vendedores_cpf)values('Legume','129.779.766-39');
insert into tipo(nome,vendedores_cpf)values('Folha','129.779.766-39');
insert into tipo(nome,vendedores_cpf)values('Objeto','129.779.766-39');
insert into tipo(nome,vendedores_cpf)values('Pacote','129.779.766-39');


/*inserindo produtos do site*/
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Cana','Legume',5.00,'img/cana.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Cenoura','Legume',8.00,'img/cenoura1.png','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Tomate Cereja','Legume',6.00,'img/tomatecereja.png','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Batata','Fruta',10.00,'img/batata.png','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Feijao','Fruta',5.00,'img/feijao.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Amendoim','Legume',5.00,'img/amendoim.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Mandioca','Legume',6.00,'img/mandioca.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Almeirao','Folha',6.00,'img/almeirao.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Chuchu','Fruta',7.00,'img/chuchu.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Abobora','Legume',5.00,'img/aboboramoranga.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Cebolinha','Folha',3.00,'img/cebolinha.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Salsinha','Folha',3.00,'img/salsinha.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Banana Prata','Fruta',10.00,'img/bananaprata.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Jabuticaba','Fruta',4.00,'img/jabuticaba.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Acerola','Fruta',8.00,'img/acerola.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Manga','Fruta',5.00,'img/manga.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Morango','Fruta',10.00,'img/morango.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Alface','Folha',3.00,'img/alface.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Couve','Folha',3.00,'img/couve.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Milho','Legume',5.00,'img/milho.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Mangueira','Objeto',30.00,'img/mangueira1.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Alicate','Objeto',30.00,'img/alicate.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Carrinho de Mao','Objeto',100.00,'img/carrinhodemao.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Pa','Objeto',50.00,'img/pa.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Girassol','Semente',20.00,'img/sementedegirassol.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Maracuja','Semente',20.00,'img/sementemaracuja1.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Pacote Frutas','Pacote',20.00,'img/pacotedia2.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Pacote Ferramentas','Pacote',150.00,'img/pacote3.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Pacote Folhas','Pacote',10.00,'img/pacote4.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Pacote Legumes','Pacote',20.00,'img/pacote1.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Pacote de Plantação','Pacote',70.00,'img/pacote5.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Pacote Variado','Pacote',10.00,'img/pacote4.jpg','129.779.766-39');
insert into produtos(codigo,nome,tipo,valor,foto,vendedores_cpf)values(null,'Pacote Salada','Pacote',10.00,'img/pacote7.jpg','129.779.766-39');


/*Inserindo estoques do site*/
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Cana',5.00,10000,'img/cana.jpg','129.779.766-39',1);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Cenoura',8.00,1000,'img/cenoura1.png','129.779.766-39',2);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Tomate Cereja',6.00,5000,'img/tomatecereja.jpg','129.779.766-39',3);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Batata',10.00,4000,'img/batata.png','129.779.766-39',4);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Feijao',5.00,250000,'img/feijao.jpg','129.779.766-39',5);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Amendoim',5.00,360000,'img/amendoim.jpg','129.779.766-39',6);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Mandioca',6.00,120,'img/mandioca.jpg','129.779.766-39',7);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Chuchu',7.00,300,'img/chuchu.jpg','129.779.766-39',8);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Abobora',5.00,30,'img/aboboramoranga.jpg','129.779.766-39',9);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Cebolinha',3.00,620,'img/cebolinha.jpg','129.779.766-39',10);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Salsinha',3.00,730,'img/salsinha.jpg','129.779.766-39',11);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Banana Prata',10.00,110,'img/bananaprata.jpg','129.779.766-39',12);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Jabuticaba',4.00,6090,'img/jabuticaba.jpg','129.779.766-39',13);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Acerola',8.00,1100,'img/acerola.jpg','129.779.766-39',14);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Manga',5.00,1600,'img/manga.jpg','129.779.766-39',15);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Morango',10.00,550,'img/morango1.jpg','129.779.766-39',16);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Alface',3.00,700,'img/alface.jpg','129.779.766-39',17);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Couve',3.00,1400,'img/couve.jpg','129.779.766-39',18);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Milho',5.00,550000,'img/milho1.jpg','129.779.766-39',19);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Mangueira',30.00,20,'img/mangueira1.jpg','129.779.766-39',20);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Alicate',30.00,70,'img/alicate.jpg','129.779.766-39',21);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Carrinho de Mao',100.00,30,'img/carrinhodemao.jpg','129.779.766-39',22);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Pa',50.00,5,'img/pa.jpg','129.779.766-39',23);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Girassol',20.00,990,'img/sementedegirassol.jpg','129.779.766-39',24);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Maracuja',20.00,19000,'img/sementemaracuja1.jpg','129.779.766-39',25);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Pacote Frutas',20.00,15,'img/pacotedia2.jpg','129.779.766-39',26);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Pacote Ferramentas',150.00,60,'img/pacote3.jpg','129.779.766-39',27);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Pacote Folhas',10.00,20,'img/pacote4.jpg','129.779.766-39',28);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Pacote Legumes',20.00,70,'img/pacote1.jpg','129.779.766-39',29);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Pacote de Plantacao',70.00,100,'img/pacote5.jpg','129.779.766-39',30);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Pacote Variado',10.00,5,'img/pacote4.jpg','129.779.766-39',31);
insert into estoque(codigo,nome,valor,quantidade,foto,vendedores_cpf,produtos_codigo)values(null,'Pacote Salada',10.00,10,'img/pacote7.jpg','129.779.766-39',32);