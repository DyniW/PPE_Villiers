drop database if exists edc2009;
create database edc2009;
use edc2009;

create table commune (
	idCommune int(5) not null auto_increment,
	nomCommune varchar(50),
	primary key(idCommune)
);

create table secteur (
	idsecteur int(5) not null auto_increment,
	nomSecteur varchar(50),
	espaceVert boolean,
	idCommune int(5) not null,
	primary key(idsecteur),
	foreign key(idCommune) references commune(idCommune)
);

insert into commune values(null, "Paris"), (null, "Lille"), (null, "Marseille");
insert into secteur values(null, "Levallois",true,1),(null,"Jussieu",false,1), (null,"Gare",false,2); 

create table profil (
	pseudo varchar(50) not null,
	email varchar(100) not null,
	mdp varchar(50),
	nom varchar(50),
	prenom varchar(50),
	primary key(pseudo)
);

insert into profil values ("admin", "admin@gmail.com","123","A","B");
insert into profil values ("user", "user@gmail.com","123","U","S");