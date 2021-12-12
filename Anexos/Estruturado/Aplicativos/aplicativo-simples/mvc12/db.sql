create table clients(
id int primary key auto_increment,
nome varchar(50),
idade int
);

insert into clients(nome, idade) values ('Pedro', 48),
('Jorge', 26),
('Marta', 35),
('João', 21);

create table products(
id int primary key auto_increment,
nome varchar(50),
preco decimal(6,2)
);

insert into products(nome, preco) values ('Banana', 2),
('Manga', 3),
('Laranja', 1.5),
('Groselha', 5);
