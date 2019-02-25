CREATE TABLE Users (
    idUser int(11) NOT NULL AUTO_INCREMENT,
    login VARCHAR(64),
    password VARCHAR(64),
    isAdmin boolean,
    prenom VARCHAR(64),
    nom VARCHAR(64),
    idUsers_Exercice int(11),
    PRIMARY KEY (idUser)
)   DEFAULT CHARSET=utf8;

CREATE TABLE Users_Exercice (
    idUsers_Exercice int(11) NOT NULL AUTO_INCREMENT,
    idUser int(11),
    idExercice int(11),
    Correction text,
    PRIMARY KEY (idUsers_Exercice)
)   DEFAULT CHARSET=utf8;

CREATE TABLE Exercice (
    idExercice int(11) NOT NULL AUTO_INCREMENT,
    exercice text,
    idTP int(11),
    idEnonce int(11),
    Enonce text,
    idUsers_Exercice int(11),
    PRIMARY KEY (idExercice)
)   DEFAULT CHARSET=utf8;

CREATE TABLE TP (
    idTP int(11) NOT NULL AUTO_INCREMENT,
    nomTP VARCHAR(64),
    date DATE,
    idCorrection int(11),
    idEnonce int(11),
    urlScriptSql VARCHAR(64),
    PRIMARY KEY (idTP)
)   DEFAULT CHARSET=utf8;

ALTER TABLE Users   
ADD CONSTRAINT Users_idUsers_Exercice
FOREIGN KEY (idUsers_Exercice)
REFERENCES Users_Exercice(idUsers_Exercice);

ALTER TABLE Users_Exercice 
ADD CONSTRAINT Users_Exercice_idExercice
FOREIGN KEY (idExercice)
REFERENCES Exercice(idExercice);

ALTER TABLE Exercice   
ADD CONSTRAINT Exercice_idTP
FOREIGN KEY (idTP)
REFERENCES TP(idTP);

INSERT INTO Users (login, password, isAdmin) VALUES ("Pepito", sha1("password"), true);
INSERT INTO Users (login, password, isAdmin) VALUES ("Michel", sha1("password"), false);
INSERT INTO Users (login, password, isAdmin) VALUES ("adummonet", sha1("password"), false);
INSERT INTO Users (login, password, isAdmin) VALUES ("nmoresco", sha1("password"), false);
INSERT INTO Users (login, password, isAdmin) VALUES ("Michel", sha1("password"), false);
INSERT INTO Users (login, password, isAdmin) VALUES ("Michel", sha1("password"), false);
INSERT INTO Users (login, password, isAdmin) VALUES ("Michel", sha1("password"), false);
INSERT INTO Users (login, password, isAdmin) VALUES ("Michel", sha1("password"), false);
INSERT INTO Users (login, password, isAdmin) VALUES ("Michel", sha1("password"), false);
INSERT INTO Users (login, password, isAdmin) VALUES ("Michel", sha1("password"), false);
INSERT INTO Users (login, password, isAdmin) VALUES ("Michel", sha1("password"), false);
INSERT INTO Users (login, password, isAdmin) VALUES ("Michel", sha1("password"), false);
INSERT INTO Users (login, password, isAdmin) VALUES ("Michel", sha1("password"), false);



INSERT INTO Exercice (Enonce) VALUES ("Je suis l'enonce 1");

INSERT INTO TP (nomTP) VALUES ("TP1");
INSERT INTO TP (nomTP) VALUES ("TP2");
INSERT INTO TP (nomTP) VALUES ("TP3");
INSERT INTO TP (nomTP) VALUES ("TP4");
INSERT INTO TP (nomTP) VALUES ("TP5");

 