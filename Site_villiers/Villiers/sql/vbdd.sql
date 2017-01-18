DROP DATABASE  vbdd;
CREATE DATABASE vbdd;
USE vbdd;

CREATE TABLE FAMILLE(
	IdF int(5) NOT NULL auto_increment,
	NomChefF varchar(30),
	PrenomChefF varchar(30),
	Password varchar(30),
	AdresseF varchar(30),
	TelF int(11),
	Mail varchar(30),
	RevenuImpoL int(10),
	NbEnfantF int(2),
	PRIMARY KEY (IdF)
);

CREATE TABLE ADMIN(
	Psd varchar(30) NOT NULL,
	mdp varchar(30),
	autorisation boolean,
	PRIMARY KEY (Psd)
);