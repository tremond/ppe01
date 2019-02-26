CREATE TABLE Utilisateur (
    id int(11) NOT NULL AUTO_INCREMENT,
    login VARCHAR(64),
    password VARCHAR(64),
    isAdmin boolean,
    PRIMARY KEY (id)
)   DEFAULT CHARSET=utf8;

CREATE TABLE Exercice (
    id int(11) NOT NULL AUTO_INCREMENT,
    script VARCHAR(64),
    date DATE,
    idUtilisateur int(11),
    PRIMARY KEY (id)
)   DEFAULT CHARSET=utf8;

CREATE TABLE CompteRendu (
    id int(11) NOT NULL AUTO_INCREMENT,
    idUtilisateur int(11),
    PRIMARY KEY (id)
)   DEFAULT CHARSET=utf8;

CREATE TABLE Question (
    id int(11) NOT NULL AUTO_INCREMENT,
    enonce TEXT,
    corrige TEXT,
    idExercice int(11),
    PRIMARY KEY (id)
)   DEFAULT CHARSET=utf8;

CREATE TABLE Reponse (
    id int(11) NOT NULL AUTO_INCREMENT,
    requete TEXT,
    idQuestion int(11),
    idCompteRendu int(11),
    PRIMARY KEY (id)
)   DEFAULT CHARSET=utf8;

ALTER TABLE Utilisateur  
ADD CONSTRAINT Utilisateur_idUtilisateur
FOREIGN KEY (idUtilisateur)
REFERENCES Exercice(idUtilisateur);

ALTER TABLE Utilisateur 
ADD CONSTRAINT Utilisateur_idUtilisateur
FOREIGN KEY (idUtilisateur)
REFERENCES CompteRendu(idUtilisateur);

ALTER TABLE Exercice   
ADD CONSTRAINT Exercice_idExercice
FOREIGN KEY (idExercice)
REFERENCES Question(idExercice);

ALTER TABLE CompteRendu   
ADD CONSTRAINT CompteRendu_idCompteRendu
FOREIGN KEY (idCompteRendu)
REFERENCES Reponse(idCompteRendu);

ALTER TABLE Question   
ADD CONSTRAINT Question_idQuestion
FOREIGN KEY (idQuestion)
REFERENCES Reponse(idQuestion);

INSERT INTO Utilisateur (login, password, isAdmin) VALUES ("Pepito", sha1("password"), true);
INSERT INTO Utilisateur (login, password, isAdmin) VALUES ("Michel", sha1("password"), false);
INSERT INTO Utilisateur (login, password, isAdmin) VALUES ("adummonet", sha1("password"), false);
INSERT INTO Utilisateur (login, password, isAdmin) VALUES ("nmoresco", sha1("password"), false);