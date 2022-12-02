CREATE DATABASE bookstore;
USE bookstore;

CREATE table author(author_id integer PRIMARY KEY NOT NULL, birthdate date, gender varchar(10), firstn varchar(10));

CREATE TABLE supplier(supplier_id integer PRIMARY KEY NOT NULL, sname varchar(20)); 

CREATE TABLE books(
ISBN integer PRIMARY KEY NOT NULL,
title varchar(50), 
price decimal(10,2), 
reviews varchar(100), 
publish_date date,
supplier_id integer,
foreign key (supplier_id) references supplier(supplier_id)); 

CREATE TABLE bookCategory(
category_code INTEGER PRIMARY KEY NOT NULL, 
category_description varchar(100),
ISBN integer,
foreign key (ISBN) references books(ISBN));

create table warehouse(
author_id integer,
ISBN integer,
stock integer,
PRIMARY KEY (author_id, ISBN),
foreign key (author_id) references author(author_id),
foreign key (ISBN) references books(ISBN)
);

create table supply_rep(
fname varchar(20),
lname varchar(20),
cell_number varchar(11),
work_number varchar(11),
email varchar(60),
supplier_id integer,
primary key (fname, lname),
foreign key (supplier_id) references supplier(supplier_id)
);



create table customers(
customer_id integer not null,
fname varchar(20),
lanme varchar(20),
contact_id integer,
primary key (customer_id)
);

create table customer_contact_details(
contact_id integer not null,
customer_id integer not null,
primary key (contact_id, customer_id),
foreign key (customer_id) references customers(customer_id)
);

create table orders(
order_id integer not null,
order_date date,
order_value decimal(10,2),
customer_id integer not null,
primary key (order_id),
foreign key (customer_id) references customers(customer_id)
);

create table customer_number(
phone varchar(15),
contact_id integer,
customer_id integer,
primary key (contact_id, customer_id),
foreign key (contact_id) references customer_contact_details(contact_id),
foreign key (customer_id) references customers(customer_id)
);

create table customer_email(
email varchar(50) not null,
contact_id integer,
customer_id integer,
primary key (contact_id, customer_id),
foreign key (contact_id) references customer_contact_details(contact_id),
foreign key (customer_id) references customers(customer_id)
);

create table customer_address(
address varchar(30) not null,
contact_id integer,
customer_id integer,
primary key (contact_id, customer_id),
foreign key (contact_id) references customer_contact_details(contact_id),
foreign key (customer_id) references customers(customer_id)
);

create table author_contact_details(
contact_id integer not null,
author_id integer not null,
primary key (contact_id, author_id),
foreign key (author_id) references author(author_id)
);

create table author_number(
phone varchar(15) not null,
contact_id integer,
customer_id integer,
primary key (contact_id, customer_id),
foreign key (contact_id) references customer_contact_details(contact_id),
foreign key (customer_id) references customers(customer_id)
);

create table author_address(
address varchar(50),
contact_id integer,
customer_id integer,
primary key (contact_id, customer_id),
foreign key (contact_id) references customer_contact_details(contact_id),
foreign key (customer_id) references customers(customer_id)
);

create table author_email(
email varchar(50) not null,
contact_id integer,
customer_id integer,
primary key (contact_id, customer_id),
foreign key (contact_id) references customer_contact_details(contact_id),
foreign key (customer_id) references customers(customer_id)
);

create table order_items(
item_numbers integer not null,
item_price decimal(10,2),
order_id integer,
ISBN integer,
primary key (item_numbers, order_id),
foreign key (order_id) references orders(order_id),
foreign key (ISBN) references books(ISBN)
);
