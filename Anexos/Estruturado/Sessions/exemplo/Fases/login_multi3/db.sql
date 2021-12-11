create table users(
    id int primary key auto_increment,
    username varchar(20) not null,
    email varchar(50) not null,
    password varchar(255) not null,
    role varchar(15) not null
);

