CREATE DATABASE jeu2;

CREATE TABLE jeu (
    idJeu INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(50) NOT NULL,
    genre VARCHAR(50) NOT NULL,
    dateSortie DATE NOT NULL
);
ALTER TABLE jeu ADD UNIQUE (titre);


CREATE TABLE joueur (
    idJoueur INT AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    dateInscription DATE NOT NULL
);
ALTER TABLE joueur ADD UNIQUE (email);



CREATE TABLE constructeur (
    idConstructeur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR (50) NOT NULL
);

CREATE TABLE emprunt (
  idJeu INT NOT NULL,
  idJoueur INT NOT NULL,
  datePret DATE NOT NULL,
  dateRetour DATE,
  PRIMARY KEY (idJeu, idJoueur),
  CONSTRAINT fk_emprunt_jeu
    FOREIGN KEY (idJeu) REFERENCES jeu(idJeu),
  CONSTRAINT fk_emprunt_joueur
    FOREIGN KEY (idJoueur) REFERENCES joueur(idJoueur)
) ENGINE=INNODB;



CREATE TABLE plateforme (
    idPlateforme INT AUTO_INCREMENT PRIMARY KEY,
    idJeu INT,
    idConstructeur INT,
    nom VARCHAR(50) NOT NULL,
    FOREIGN KEY (idJeu) REFERENCES jeu (idJeu),
    FOREIGN KEY (idConstructeur) REFERENCES constructeur (idConstructeur)
);
