 mysql --user=root --password=

create database skole;
use skole;

  create table elektro(
    -> id int primary key auto_increment,
    -> name varchar(50),
    -> students int,
    -> teacher varchar(50)
    -> );

insert into elektro (name, students, teacher)
values ("1ELA", 15, "Irene Toien");
values ("1ELB", 15, "Atle");
values ("1ELC", 15, "Peter Grun");
values ("1ELD", 15, "Oystein");
values ("2ELA", 15, "Rino");
values ("2ELB", 15, "Morten");
values ("2DEA", 15, " Jolle");
values ("3DAA", 15, "Jon William");


CREATE TABLE authors (
  id int NOT NULL primary key auto_increment,
  fornavn   varchar(50),
  etternavn varchar(50),
  epost     varchar(50),
  adresse varchar(50)
);

CREATE TABLE books 
(
  id int NOT NULL primary key auto_increment,
  tittel varchar(50),
  arstall varchar(50),
  forlag varchar(50),
  ISBN varchar(50),
  aid int NOT NULL
);


insert into authors (fornavn, etternavn, epost, adresse )
values ("Dav", "Pilkey", "DavThePilker69@yahoo.com", "Truseveien 69");
values ("Rick", "Riordan", "Titanslayer69@gmail.com","Olympos" );
values( "Jolkien", "Rolkien Rolkien Tolkien", "Rolkien@tolkien.com", "gravlundstien 8");
;