CREATE DATABASE car_rental;

USE car_rental;

CREATE TABLE contact (name varchar(30) not null, 
                    email varchar(30) not null, 
                    phone bigint(20) not null, 
                    message varchar(255) not null, 
                    primary key(email));

create table users (uname varchar(30) not null,
                    email varchar(40) not null,
                    password varcahr(40) not null,
                    loggedinas int(1) default '0',
                    primary key(uname));