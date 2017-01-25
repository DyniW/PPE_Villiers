DROP DATABASE IF EXISTS vbdd;

CREATE DATABASE IF NOT EXISTS vbdd;
USE vbdd;
# -----------------------------------------------------------------------------
#       TABLE : TRANCHE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TRANCHE
 (
   IDT INTEGER(5) NOT NULL  ,
   LIMITET INTEGER(5) NULL  
   , PRIMARY KEY (IDT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ENFANT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ENFANT
 (
   IDE INTEGER(5) NOT NULL  ,
   NOME VARCHAR(30) NULL  ,
   PRENOME VARCHAR(30) NULL  ,
   DATENE DATE NULL  ,
   LIEUNE VARCHAR(30) NULL  
   , PRIMARY KEY (IDE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CALENDRIER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CALENDRIER
 (
   DATEC DATE NOT NULL  
   , PRIMARY KEY (DATEC) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ADULTE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ADULTE
 (
   IDA INT(5) not null auto_increment,
   IDT INT(5) NOT NULL  ,
   NOMA VARCHAR(30) NULL  ,
   PRENOMA VARCHAR(30) NULL  ,
   ADRESSEA VARCHAR(50) NULL  ,
   TELA INT(10) NULL  ,
   MAIL VARCHAR(30) NULL  ,
   PASSWORD VARCHAR(30) NULL  ,
   REVENUIMP INT(5) NULL  ,
   NBENFANT INT(2) NULL  
   , PRIMARY KEY (IDA) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ADULTE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ADULTE_TRANCHE
     ON ADULTE (IDT ASC);

# -----------------------------------------------------------------------------
#       TABLE : PRESTATIONS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PRESTATIONS
 (
   IDP INTEGER(5) NOT NULL  ,
   LIBELLEP VARCHAR(50) NULL  
   , PRIMARY KEY (IDP) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : INSCRIRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INSCRIRE
 (
   IDE INTEGER(5) NOT NULL  ,
   IDP INTEGER(5) NOT NULL  ,
   DATEC DATE NOT NULL  
   , PRIMARY KEY (IDE,IDP,DATEC) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE INSCRIRE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_INSCRIRE_ENFANT
     ON INSCRIRE (IDE ASC);

CREATE  INDEX I_FK_INSCRIRE_PRESTATIONS
     ON INSCRIRE (IDP ASC);

CREATE  INDEX I_FK_INSCRIRE_CALENDRIER
     ON INSCRIRE (DATEC ASC);

# -----------------------------------------------------------------------------
#       TABLE : TARIFIER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TARIFIER
 (
   IDP INTEGER(5) NOT NULL  ,
   IDT INTEGER(5) NOT NULL  
   , PRIMARY KEY (IDP,IDT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE TARIFIER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_TARIFIER_PRESTATIONS
     ON TARIFIER (IDP ASC);

CREATE  INDEX I_FK_TARIFIER_TRANCHE
     ON TARIFIER (IDT ASC);

# -----------------------------------------------------------------------------
#       TABLE : CHOISIR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CHOISIR
 (
   DATEC DATE NOT NULL  ,
   IDP INTEGER(5) NOT NULL  ,
   IDA INTEGER(5) NOT NULL  
   , PRIMARY KEY (DATEC,IDP,IDA) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CHOISIR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CHOISIR_CALENDRIER
     ON CHOISIR (DATEC ASC);

CREATE  INDEX I_FK_CHOISIR_PRESTATIONS
     ON CHOISIR (IDP ASC);

CREATE  INDEX I_FK_CHOISIR_ADULTE
     ON CHOISIR (IDA ASC);

# -----------------------------------------------------------------------------
#       TABLE : MARIER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MARIER
 (
   IDA INTEGER(5) NOT NULL  ,
   IDA_1 INTEGER(5) NOT NULL  ,
   DATEM DATE not NULL  ,
   DateD date ,
   DIVORCE date NULL  ,
   REVENUIMPO INTEGER(5) NULL  
   , PRIMARY KEY (IDA,IDA_1) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE MARIER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_MARIER_ADULTE
     ON MARIER (IDA ASC);

CREATE  INDEX I_FK_MARIER_ADULTE1
     ON MARIER (IDA_1 ASC);

# -----------------------------------------------------------------------------
#       TABLE : RATTACHER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RATTACHER
 (
   IDE INTEGER(5) NOT NULL  ,
   IDA INTEGER(5) NOT NULL  
   , PRIMARY KEY (IDE,IDA) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE RATTACHER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_RATTACHER_ENFANT
     ON RATTACHER (IDE ASC);

CREATE  INDEX I_FK_RATTACHER_ADULTE
     ON RATTACHER (IDA ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE ADULTE 
  ADD FOREIGN KEY FK_ADULTE_TRANCHE (IDT)
      REFERENCES TRANCHE (IDT) ;


ALTER TABLE INSCRIRE 
  ADD FOREIGN KEY FK_INSCRIRE_ENFANT (IDE)
      REFERENCES ENFANT (IDE) ;


ALTER TABLE INSCRIRE 
  ADD FOREIGN KEY FK_INSCRIRE_PRESTATIONS (IDP)
      REFERENCES PRESTATIONS (IDP) ;


ALTER TABLE INSCRIRE 
  ADD FOREIGN KEY FK_INSCRIRE_CALENDRIER (DATEC)
      REFERENCES CALENDRIER (DATEC) ;


ALTER TABLE TARIFIER 
  ADD FOREIGN KEY FK_TARIFIER_PRESTATIONS (IDP)
      REFERENCES PRESTATIONS (IDP) ;


ALTER TABLE TARIFIER 
  ADD FOREIGN KEY FK_TARIFIER_TRANCHE (IDT)
      REFERENCES TRANCHE (IDT) ;


ALTER TABLE CHOISIR 
  ADD FOREIGN KEY FK_CHOISIR_CALENDRIER (DATEC)
      REFERENCES CALENDRIER (DATEC) ;


ALTER TABLE CHOISIR 
  ADD FOREIGN KEY FK_CHOISIR_PRESTATIONS (IDP)
      REFERENCES PRESTATIONS (IDP) ;


ALTER TABLE CHOISIR 
  ADD FOREIGN KEY FK_CHOISIR_ADULTE (IDA)
      REFERENCES ADULTE (IDA) ;


ALTER TABLE MARIER 
  ADD FOREIGN KEY FK_MARIER_ADULTE (IDA)
      REFERENCES ADULTE (IDA) ;


ALTER TABLE MARIER 
  ADD FOREIGN KEY FK_MARIER_ADULTE1 (IDA_1)
      REFERENCES ADULTE (IDA) ;


ALTER TABLE RATTACHER 
  ADD FOREIGN KEY FK_RATTACHER_ENFANT (IDE)
      REFERENCES ENFANT (IDE) ;


ALTER TABLE RATTACHER 
  ADD FOREIGN KEY FK_RATTACHER_ADULTE (IDA)
      REFERENCES ADULTE (IDA) ;

