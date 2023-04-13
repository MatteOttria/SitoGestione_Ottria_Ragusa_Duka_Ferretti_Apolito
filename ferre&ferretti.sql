CREATE DATABASE FerreEFerretti;

USE FerreEFerretti;

CREATE TABLE users(
id int NOT NULL AUTO_INCREMENT,
email varchar(255),
password varchar(255),
PRIMARY KEY (id)	 
);

CREATE TABLE orders(
id int NOT NULL AUTO_INCREMENT,
product varchar(255),
userId int,
PRIMARY KEY (id),
FOREIGN KEY (userId) REFERENCES users(id)
)