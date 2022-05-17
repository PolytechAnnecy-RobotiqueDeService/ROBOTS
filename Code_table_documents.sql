DROP TABLE IF EXISTS Documents; 

CREATE TABLE Documents
(
	id_doc INT NOT NULL AUTO_INCREMENT,
	titre VARCHAR(100),
	date_rendu VARCHAR(100),
	type_doc VARCHAR(100),
	chemin VARCHAR(100),
	PRIMARY KEY (id_doc)
);

INSERT INTO Documents (id_doc, titre, date_rendu, type_doc, chemin)
 VALUES 
 (1, 'APP_Robot_Seance_1', '09/02/22', 'CR', 'E:\public_html\ROBOTS\Documents'),
 (2, 'APP_Robot_Seance_2', '02/03/22', 'CR', 'E:\public_html\ROBOTS\Documents'),
 (3, 'APP_Robot_Seance_3', '16/03/22', 'CR', 'E:\public_html\ROBOTS\Documents'),
 (4, 'APP_Robot_Seance_4', '29/03/22', 'CR', 'E:\public_html\ROBOTS\Documents'),
 (5, 'APP_Robot_Seance_5', '13/04/22', 'CR', 'E:\public_html\ROBOTS\Documents'),
 (6, 'APP_Robot_Seance_6', '26/04/22', 'CR', 'E:\public_html\ROBOTS\Documents'),
 (7, 'APP_Robot_Seance_7', '04/05/22', 'CR', 'E:\public_html\ROBOTS\Documents');