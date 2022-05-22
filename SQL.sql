/*CODE sql*/

DROP TABLE IF EXISTS `ROBOTS_media`;

CREATE TABLE `ROBOTS_media` (
	`id_media` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`titre` VARCHAR(255) NOT NULL,
	`type` VARCHAR(255),
	`date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	`lien` VARCHAR(255));      
	
DROP TABLE IF EXISTS `ROBOTS_document`;


CREATE TABLE `ROBOTS_document` (
	`id_document` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`titre` VARCHAR(255) NOT NULL,
	`type` VARCHAR(255),
	`date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	`lien` VARCHAR(255));


DROP TABLE IF EXISTS `ROBOTS_membre`;

CREATE TABLE `ROBOTS_membre` (
	`id_membre` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`nom` VARCHAR(255) NOT NULL,
	`prenom` VARCHAR(255) NOT NULL,
	`mail` VARCHAR(255));


DROP TABLE IF EXISTS `ROBOTS_commentaire`;

CREATE TABLE `ROBOTS_commentaire` (
	`id_commentaire` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`commentaire` VARCHAR(255) NOT NULL);

Drop table if exists ROBOTS_capteur;
CREATE TABLE ROBOTS_capteur (
	id_capteur INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	titre VARCHAR(255) NOT NULL,
    categorie varchar(255),
	type VARCHAR(255),
    robot varchar(255),
    lieux VARCHAR(255),
	reference VARCHAR(255));
	
	
/* données medias*/
INSERT INTO `ROBOTS_media` (`titre`, `type`, `date`, `lien`)
VALUES ("test1_img", "image", '2022-05-09 14:00:00', "https://tp-epua.univ-smb.fr/~sangouam/ROBOTS/documents/images/IMG_20220504_102031.jpg");

INSERT INTO `ROBOTS_media` (`titre`, `type`, `date`, `lien`)
VALUES ("test2_vidéo", "video", '2022-05-09 14:00:00', "https://tp-epua.univ-smb.fr/~sangouam/ROBOTS/documents/videos/20220504_103746.mp4");


/* données documents*/
INSERT INTO `ROBOTS_document` (`titre`, `type`, `date`, `lien`)
VALUES ("test1_doc", "cr", '2022-05-09 14:00:00', "https://docs.google.com/document/d/1pa7nZDWT_BkugpsqJcrKRhalMSvmP7PIaBzFGjDPNWw/edit?usp=sharing");


/* données membres*/
INSERT INTO `ROBOTS_membre` (`nom`, `prenom`, `mail`)
VALUES ("SANGOUARD", "Marine", "marine.sangouard@gmail.com");

INSERT INTO `ROBOTS_membre` (`nom`, `prenom`, `mail`)
VALUES ("JENNY", "Camille", "");

INSERT INTO `ROBOTS_membre` (`nom`, `prenom`, `mail`)
VALUES ("LEGLISE", "Cloé", "");

INSERT INTO `ROBOTS_membre` (`nom`, `prenom`, `mail`)
VALUES ("ROY", "Nicolas", "nicolas.roy.8@ens.etsmtl.ca");

INSERT INTO `ROBOTS_membre` (`nom`, `prenom`, `mail`)
VALUES ("RUIZ", "Florian", "");

INSERT INTO `ROBOTS_membre` (`nom`, `prenom`, `mail`)
VALUES ("MISON", "Jules", "");

INSERT INTO `ROBOTS_membre` (`nom`, `prenom`, `mail`)
VALUES ("Benhima", "Mehdi", "");

INSERT INTO `ROBOTS_membre` (`nom`, `prenom`, `mail`)
VALUES ("SAHL", "Hamza", "");

/* donnees capteurs*/
INSERT INTO ROBOTS_capteur (`titre`,`categorie`, `type`,`robot`, `lieux`, `reference`)
 VALUES ('LEDS_RGB_oeil_droit_*8','Actionneur', 'LED_RGB','Nao','Tete','' ),
('LEDS_RGB_oeil_gauche_*8','Actionneur', 'LED_RGB','Nao','Tete','' ),
('LEDS_RGB_oreilles_gauche_*10','Actionneur', 'LED_RGB','Nao','Tete','' ),
('LEDS_RGB_oreilles_droite_*10','Actionneur', 'LED_RGB','Nao','Tete','' ),
('LEDS_RGB_Torse_*1','Actionneur', 'LED_RGB','Nao','Torse','' ),
('LEDS_RGB_Pied_Droit_*1','Actionneur', 'LED_RGB','Nao','Pied_Droit','' ),
('LEDS_RGB_Pied_Gauche_*1','Actionneur', 'LED_RGB','Nao','Pied_Gauche','' ),
('LEDS_Bleu_calotte_*12','Actionneur', 'LED_Bleu','Nao','Tete','' ),

('Interrupteur_Torse','Actionneur', 'Interrupteur','Nao','Torse','' ),
('Interrupteur_Pied_Droit','Actionneur', 'Interrupteur','Nao','Pied_Droit','' ),
('Interrupteur_Pied_Gauche','Actionneur', 'Interrupteur','Nao','Pied_Gauche','' ),

('Accelerometre_3_axes','Capteur', 'Accelerometre','Nao','Tete','' ),
('Gyromètre_2_axes','Capteur', 'Gyromètre','Nao','Tete','' ),
('Sonars_Torse_*2','Capteur', 'Sonars','Nao','Torse','' ),
('Capteur_Pression_Droit_FSRs_*4','Capteur', 'FSRs','Nao','Pied_Droit','' ),
('Capteur_Pression_Gauche_FSRs_*4','Capteur', 'FSRs','Nao','Pied_Gauche','' ),
('Touche_Capacitive_Tete','Capteur', 'Touches_Capacitives','Nao','Tete','' ),

('Touche_Capacitive_gauche_Main_Droite','Capteur', 'Touches_Capacitives','Nao','Main_Droite','' ),
('Touche_Capacitive_centre_Main_Droite','Capteur', 'Touches_Capacitives','Nao','Main_Droite','' ),
('Touche_Capacitive_droit_Main_Droite','Capteur', 'Touches_Capacitives','Nao','Main_Droite','' ),
('Touche_Capacitive_gauche_Main_Gauche','Capteur', 'Touches_Capacitives','Nao','Main_Gauche','' ),
('Touche_Capacitive_centre_Main_Gauche','Capteur', 'Touches_Capacitives','Nao','Main_Gauche','' ),
('Touche_Capacitive_droit_Main_Gauche','Capteur', 'Touches_Capacitives','Nao','Main_Gauche','' ),


('Capteur_de_charge','Capteur', 'Batterie','Nao','Torse','' ),
('Capteur_de_courant','Capteur', 'Batterie','Nao','Torse','' ),
('Capteur_de_tension','Capteur', 'Batterie','Nao','Torse','' ),
('Batterie','Actionneur', 'Batterie','Nao','Torse','' ),
('Camera_haute','Capteur', 'Camera','Nao','Tete','' ),
('Camera_basse','Capteur', 'Camera','Nao','Tete','' ),
('Capteur_IR_Droit','Capteur', 'IR','Nao','Tete','' ),
('Capteur_IR_Gauche','Capteur', 'IR','Nao','Tete','' ),
('Microphone_Arrière','Capteur', 'Microphone','Nao','Tete','' ),
('Microphone_Avant','Capteur', 'Microphone','Nao','Tete','' ),
('Microphone_Gauche','Capteur', 'Microphone','Nao','Tete','' ),
('Microphone_Droit','Capteur', 'Microphone','Nao','Tete','' ),
('Haut-Parleur_droit','Actionneur', 'Haut-Parleur','Nao','Tete','' ),
('Haut-Parleur_Gauche','Actionneur', 'Haut-Parleur','Nao','Tete','' ),
('Moteurs_Tete_*2','Actionneur', 'Moteurs','Nao','Tete','' ),
('Processeur','Actionneur', 'Processeur','Nao','Tete','' ),

('Moteurs_ShoulderRoll_droit','Actionneur', 'Moteurs','Nao','Bras_Droit','' ),
('Moteurs_ElbowRoll_droit','Actionneur', 'Moteurs','Nao','Bras_Droit','' ),
('Moteurs_ElbowYaw_droit','Actionneur', 'Moteurs','Nao','Bras_Droit','' ),
('Moteurs_WristYaw_droit','Actionneur', 'Moteurs','Nao','Bras_Droit','' ),
('Moteurs_ShoulderPitch_droit','Actionneur', 'Moteurs','Nao','Bras_Droit','' ),
 
('Moteurs_ShoulderRoll_Gauche','Actionneur', 'Moteurs','Nao','Bras_Gauche','' ),
('Moteurs_ElbowRoll_Gauche','Actionneur', 'Moteurs','Nao','Bras_Gauche','' ),
('Moteurs_ElbowYaw_Gauche','Actionneur', 'Moteurs','Nao','Bras_Gauche','' ),
('Moteurs_WristYaw_Gauche','Actionneur', 'Moteurs','Nao','Bras_Gauche','' ),
('Moteurs_ShoulderPitch_Gauche','Actionneur', 'Moteurs','Nao','Bras_Gauche','' ),
 
('Moteurs_Main_droit','Actionneur', 'Moteurs','Nao','Main_Droite','' ),
('Moteurs_Main_Gauche','Actionneur', 'Moteurs','Nao','Main_Gauche','' ),
 
('Moteurs_HipYawPitch_Jambe_Droite','Actionneur', 'Moteurs','Nao','Jambes_Droite','' ),
('Moteurs_HipYawPitch_Jambe_Gauche','Actionneur', 'Moteurs','Nao','Jambes_Gauche','' ),
('Moteurs_HipPitch_Jambe_Gauche','Actionneur', 'Moteurs','Nao','Jambes_Gauche','' ),
('Moteurs_HipPitch_Jambe_Droite','Actionneur', 'Moteurs','Nao','Jambes_Droite','' ),
 
('Moteurs_KneePitch_Jambe_Droite','Actionneur', 'Moteurs','Nao','Jambes_Gauche','' ),
('Moteurs_KneePitch_Jambe_Droite','Actionneur', 'Moteurs','Nao','Jambes_Gauche','' ),
 
('Moteurs_AnklePitch_Jambe_Droite','Actionneur', 'Moteurs','Nao','Jambes_Droite','' ),
('Moteurs_AnklePitch_Jambe_Gauche','Actionneur', 'Moteurs','Nao','Jambes_Gauche','' ),
 
('Moteurs_HipRoll_Jambe_Droite','Actionneur', 'Moteurs','Nao','Jambes_Droite','' ),
('Moteurs_HipRoll_Jambe_Gauche','Actionneur', 'Moteurs','Nao','Jambes_Gauche','' ),
 
('Moteurs_AnkleRoll_Jambe_Droite','Actionneur', 'Moteurs','Nao','Jambes_Droite','' ),
('Moteurs_AnkleRoll_Jambe_Gauche','Actionneur', 'Moteurs','Nao','Jambes_Gauche','' );
 
 
INSERT INTO ROBOTS_capteur (`titre`,`categorie`, `type`,`robot`, `lieux`, `reference`)
 VALUES ('LEDS_RGB_oeil_droit_*8','Actionneur', 'LED_RGB','Pepper','Tete','' ),
('LEDS_RGB_oeil_gauche_*8','Actionneur', 'LED_RGB','Pepper','Tete','' ),
('LEDS_RGB_oreille_droite_*10','Actionneur', 'LED_Bleu','Pepper','Tete','' ),
('LEDS_RGB_oreille_gauche_*10','Actionneur', 'LED_Bleu','Pepper','Tete','' ),
('LEDS_RGB_épaules_gauche_*2','Actionneur', 'LED_RGB','Pepper','Torse','' ),
('LEDS_RGB_épaules_droite_*2','Actionneur', 'LED_RGB','Pepper','Torse','' ),
('3D_Camera','Capteur', 'Camera','Pepper','Tete','' ),
('2D_Camera_Haute','Capteur', 'Camera','Pepper','Tete','' ),
('2D_Camera_Basse','Capteur', 'Camera','Pepper','Tete','' ),
('Micro_Avant_Droit','Capteur', 'Micro','Pepper','Tete','' ),
('Micro_Arrier_Droit','Capteur', 'Micro','Pepper','Tete','' ),
('Micro_Avant_Gauche','Capteur', 'Micro','Pepper','Tete','' ),
('Micro_Avant_Gauche','Capteur', 'Micro','Pepper','Tete','' ),
('Haut-Parleur_Droit','Actionneur', 'Haut-Parleur','Pepper','Tete','' ),
('Haut-Parleur_Gauche','Actionneur', 'Haut-Parleur','Pepper','Tete','' ),
 
('Moteurs_HeadYaw','Actionneur', 'Moteurs','Pepper','Tete','' ),
('Moteurs_HeadPitch','Actionneur', 'Moteurs','Pepper','Tete','' ),
('Moteurs_ShoulderPitch_Bras_droit','Actionneur', 'Moteurs','Pepper','Bras_Droit','' ),
('Moteurs_ShoulderRoll_Bras_droit','Actionneur', 'Moteurs','Pepper','Bras_Droit','' ),
('Moteurs_ElbowYaw_Bras_droit','Actionneur', 'Moteurs','Pepper','Bras_Droit','' ),
('Moteurs_ElbowRoll_Bras_droit','Actionneur', 'Moteurs','Pepper','Bras_Droit','' ),
('Moteurs_ShoulderPitch_Bras_gauche','Actionneur', 'Moteurs','Pepper','Bras_Gauche','' ),
('Moteurs_ShoulderRoll_Bras_gauche','Actionneur', 'Moteurs','Pepper','Bras_Gauche','' ),
('Moteurs_ElbowYaw_Bras_gauche','Actionneur', 'Moteurs','Pepper','Bras_Gauche','' ),
('Moteurs_ElbowRoll_Bras_gauche','Actionneur', 'Moteurs','Pepper','Bras_Gauche','' ),
('Moteurs_WristYaw_Main_Droite','Actionneur', 'Moteurs','Pepper','Main_Droite','' ),
('Moteurs_Hand_Main_Droite','Actionneur', 'Moteurs','Pepper','Main_Droite','' ),
('Moteurs_WristYaw_Main_Gauche','Actionneur', 'Moteurs','Pepper','Main_Gauche','' ),
('Moteurs_Hand_Main_Gauche','Actionneur', 'Moteurs','Pepper','Main_Gauche','' ),
('Moteurs_HipRoll','Actionneur', 'Moteurs','Pepper','Jambes','' ),
('Moteurs_KneePitch','Actionneur', 'Moteurs','Pepper','Jambes','' ),
('Moteurs_HipPitch','Actionneur', 'Moteurs','Pepper','Jambes','' ),
('Moteurs_WheelFL','Actionneur', 'Moteurs','Pepper','Jambes','' ),
('Moteurs_WheelFR','Actionneur', 'Moteurs','Pepper','Jambes','' ),
('Moteurs_WheelB','Actionneur', 'Moteurs','Pepper','Jambes','' ),
('Batterie','Actionneur', 'Batterie','Pepper','Torse','' ),

 ('laser_milieu','Capteur', 'Laser','Pepper','Jambes','' ), 
 ('laser_gauche','Capteur', 'Laser','Pepper','Jambes','' ), 
 ('laser_droit','Capteur', 'Laser','Pepper','Jambes','' ),
 ('IR_droit','Capteur', 'IR','Pepper','Jambes','' ),
 ('IR_gauche','Capteur', 'IR','Pepper','Jambes','' ),
 ('sonar_arrière','Capteur', 'Sonars','Pepper','Jambes','' ),
 ('sonar_avant','Capteur', 'Sonars','Pepper','Jambes','' ),
 ('capteur_effet_Hall_*30','Capteur', 'Capteur_effet_Hall','Pepper','Torse','' ),
 ('unité_inertielle_roue_gauche','Capteur', 'Accelerometre','Pepper','Jambes','' ),
 ('unité_inertielle_roue_droite','Capteur', 'Accelerometre','Pepper','Jambes','' ),
 ('unité_inertielle_roue_arrière','Capteur', 'Accelerometre','Pepper','Jambes','' ),
 ('unité_inertielle_genoux','Capteur', 'Accelerometre','Pepper','Jambes','' ),
 ('unité_inertielle_bassin','Capteur', 'Accelerometre','Pepper','Jambes','' ),
 ('unité_inertielle_épaule_gauche','Capteur', 'Accelerometre','Pepper','Torse','' ),
 ('unité_inertielle_épaule_droite','Capteur', 'Accelerometre','Pepper','Torse','' ),
 ('unité_inertielle_coude_gauche','Capteur', 'Accelerometre','Pepper','Bras_Gauche','' ),
 ('unité_inertielle_coude_droit','Capteur', 'Accelerometre','Pepper','Bras_Droit','' ),
 ('unité_inertielle_main_gauche','Capteur', 'Accelerometre','Pepper','Bras_Gauche','' ),
 ('unité_inertielle_main_droite','Capteur', 'Accelerometre','Pepper','Bras_Droit','' ),
 ('unité_inertielle cou','Capteur', 'Accelerometre','Pepper','tête','' ),
 ('bouton_poitrine','Capteur', 'Touches_Capacitives','Pepper','Torse','' ),
 ('bouton_STOP','Capteur', 'Touches_Capacitives','Pepper','Torse','' ),
 ('bouton_dos_main_gauche','Capteur', 'Touches_Capacitives','Pepper','Bras_Gauche','' ),
 ('bouton_dos_main_droite','Capteur', 'Touches_Capacitives','Pepper','Bras_Droit','' ),
 ('bouton_tête_avant','Capteur', 'Touches_Capacitives','Pepper','Tete','' ),
 ('bouton_tête_milieu','Capteur', 'Touches_Capacitives','Pepper','Tete','' ),
 ('bouton_tête_arrière','Capteur', 'Touches_Capacitives','Pepper','Tete','' ),
 ('bouton_bumper_avant_gauche','Capteur', 'Touches_Capacitives','Pepper','Jambes','' ),
 ('bouton_bumper_avant_droit','Capteur', 'Touches_Capacitives','Pepper','Jambes','' ),
 ('bouton_bumper_arrière','Capteur', 'Touches_Capacitives','Pepper','Jambes','' );
    

/*requètes php :

MEDIAS :
RECUPERER les titres des médias : 								OK
	SELECT titre FROM ROBOTS_media;
RECUPERER les liens des médias : 								OK voir 'affichage'
	SELECT lien FROM ROBOTS_media;

RECUPERER les titres des images :								OK
	SELECT titre FROM ROBOTS_media WHERE type ='image';
RECUPERER les liens des images :								=> <img src=''>
	SELECT lien FROM ROBOTS_media WHERE type ='image';
	
RECUPERER les titres des vidéos :
	SELECT titre FROM ROBOTS_media WHERE type ='video';			OK
RECUPERER les liens des vidéos :
	SELECT lien FROM ROBOTS_media WHERE type ='video';			=> <video controls><source src='...' type='video/mp4'></video>
	
	
	
DOCUMENTS :
RECUPERER les dates des documents : 
	SELECT date FROM ROBOTS_document;							OK
RECUPERER les liens des comptes rendus : 
	SELECT lien FROM ROBOTS_document WHERE type='cr';			OK

*/



/* affichage médias dans du php :

$sql="SELECT lien, type FROM ROBOTS_media;";
$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);

if(mysqli_num_rows($result) > 0){
	echo ("<ul id=''>\n");
	
	while ($row = mysqli_fetch_array($result)) { 
		if(stristr($row[1],'video')){
			echo ("<li><video controls><source src=".$row[0]." type='video/mp4'></video></li>\n");
		}
		elseif(stristr($row[1],'image')){
			echo ("<li><img src=".$row[0]."></li>\n");
		}
	}
	
	echo ("</ul>\n");
}

else {
	echo "Il n'y a pas de médias dans la BDD";
} */