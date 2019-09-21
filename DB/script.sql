create database ventas;
use ventas;
​
create table producto(
	id int unsigned auto_increment,
	name varchar(45),
	price decimal(10,2),
	stock int,
	constraint primary key (id)
);
​
create table cliente(
	id int unsigned auto_increment,
	name varchar(45),
	lastname varchar(45),
	email varchar(45),
	constraint primary key (id)
);