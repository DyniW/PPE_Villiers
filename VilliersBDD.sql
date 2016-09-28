DROP DATABASE  VilliersBDD;
CREATE DATABASE VilliersBDD;
USE VilliersBDD;

CREATE TABLE PRESTATION(
	Idp int(5) NOT NULL,
	LibelleP varchar(30),
	NbplaceP int(3),
	PRIMARY KEY (Idp)
);

CREATE TABLE TRANCHE(
	IdT int(5) NOT NULL,
	LimitReft int(6),
	PRIMARY KEY (IdT)
);

CREATE TABLE FAMILLE(
	IdF int(5) NOT NULL,
	NomChefF varchar(30),
	PrenomChefF varchar(30),
	AdresseF varchar(30),
	TelF int(10),
	RevenuImpoL int(10),
	NbEnfantF int(2),
	IdT int(5) NOT NULL,
	PRIMARY KEY (IdF),
	FOREIGN KEY (IdT) references TRANCHE(IdT)
);

CREATE TABLE ENFANT(
	IdE int(5) NOT NULL,
	NomE varchar(30),
	PrenomE varchar(30),
	DateNE date,
	LieuNE varchar(30),
	IdF int(5) NOT NULL,
	PRIMARY KEY (IdE),
	FOREIGN KEY (IdF) references FAMILLE(IdF)
); 

CREATE TABLE ADULTE(
	IdA int(5) NOT NULL,
	NomA varchar(30),
	PrenomA varchar(30),
	DateNA date,
	TelA int(10),
	LieuNA varchar(30),
	IdF int(5) NOT NULL,
	PRIMARY KEY (IdA),
	FOREIGN KEY(IdF) references FAMILLE(IdF)
);

CREATE TABLE INSCRIRE(
	IdA int(5) NOT NULL,
	IdE int(5) NOT NULL,
	Idp int(5) NOT NULL,
	PRIMARY KEY (IdA,IdE,Idp),
	FOREIGN KEY(IdA) references ADULTE(IdA),
	FOREIGN KEY(IdE) references ENFANT(IdE),
	FOREIGN KEY(Idp) references PRESTATION(Idp),
);

CREATE TABLE TARIFIER(
	Idp int(5) NOT NULL,
	IdT int(5) NOT NULL,
	PRIMARY KEY(Idp,IdT),
	FOREIGN KEY(Idp) references PRESTATION(Idp),
	FOREIGN KEY(IdT) references TRANCHE(IdT),
);
