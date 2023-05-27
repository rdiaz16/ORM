create database db_sales;
use db_sales;
-- table creation
create table products (
id int auto_increment,
name varchar(100),
price double not null,
primary key(id)
);

create table sales (
id int auto_increment,
customer varchar(100),
date datetime,
primary key(id)
);

create table saledetail (
id int auto_increment,
product_id int references products(id),
sale_id int references sales(id),
amount int not null,
discount int not null,
primary key(id)
);

create table users (
id int auto_increment,
email varchar(100) not null,
user varchar(50) not null,
pass varchar(256) not null,
status int default 0,
privilege varchar(50) not null,
primary key(id)
);

-- stored procedures
-- Users(users)
create procedure register(
_email varchar(100),
_user varchar(50),
_pass varchar(256),
_privilege varchar(50)
)
insert into users(email,user,pass,privilege) values(_email,_user,_pass,_privilege);

call register('rdiaz16@gmail.com','Ricardo','123','admin');

-- select * from users;