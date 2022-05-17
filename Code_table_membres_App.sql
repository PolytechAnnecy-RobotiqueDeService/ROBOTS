CREATE TABLE Membres_App
(
	id_membre INT NOT NULL AUTO_INCREMENT,
	nom VARCHAR(100),
	prenom VARCHAR(100),
	role VARCHAR(100),
	PRIMARY KEY (id_membre)
);
INSERT INTO Membres_App (id_membre, nom, prenom, role)
 VALUES 
  (11, 'Florian', 'RUIZ', 'Chef_Projet'),
  (12, 'Jules', 'MISON', 'Com_Nao'),
  (13, 'Cloé', 'LEGLISE', 'Tab_Pepper'),
  (14, 'Camille', 'JENNY', 'Deplacement_Pepper'),
  (15, 'Marine', 'SANGOUARD', 'Serveur/client'),
  (16, 'Hamza', 'SALH', 'Tab_Pepper'),
  (17, 'Mehdi', 'BENHIMA', 'Serveur/client'),
  (18, 'Nicolas', 'ROY', 'Deplacement_Pepper');