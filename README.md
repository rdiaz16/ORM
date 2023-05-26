# ORM (Object Relational Mapping)
## Project Sales System using php, mysql and node
## Sales System Diagram
![Diagram](https://github.com/rdiaz16/ORM/assets/50643183/2538ee8c-bf14-4632-b2d7-e2e38a91686e)
## Code to create database
1. create database db_sales;
2. use db_sales;
3. create table products (
id int auto_increment,
name varchar(100),
price double not null,
primary key(id)
);
4. create table sales (
id int auto_increment,
customer varchar(100),
date datetime,
primary key(id)
);
5. create table saledetail (
id int auto_increment,
product_id int references products(id),
sale_id int references sales(id),
amount int not null,
discount int not null,
primary key(id)
);
6. create table users (
   id int auto_increment,
   email varchar(100) not null,
   user varchar(50) not null,
   pass varchar(256) not null,
   status int default 0,
   privilege varchar(50) not null,
   primary key(id)
   );

## Directory Structure and PDO connection