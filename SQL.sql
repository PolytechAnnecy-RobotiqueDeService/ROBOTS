"""CODE sql"""

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
	
	

INSERT INTO `ROBOTS_media` (`titre`, `type`, `date`, `lien`)
VALUES ("test1_img", "image", '2022-05-09 14:00:00', "https://tp-epua.univ-smb.fr/~sangouam/ROBOTS/documents/images/IMG_20220504_102031.jpg");

INSERT INTO `ROBOTS_media` (`titre`, `type`, `date`, `lien`)
VALUES ("test2_vidéo", "video", '2022-05-09 14:00:00', "https://tp-epua.univ-smb.fr/~sangouam/ROBOTS/documents/videos/20220504_103746.mp4");



INSERT INTO `ROBOTS_document` (`titre`, `type`, `date`, `lien`)
VALUES ("test1_doc", "cr", '2022-05-09 14:00:00', "https://docs.google.com/document/d/1pa7nZDWT_BkugpsqJcrKRhalMSvmP7PIaBzFGjDPNWw/edit?usp=sharing");




"""requètes php :

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

"""



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