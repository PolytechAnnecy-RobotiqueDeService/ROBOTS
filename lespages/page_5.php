<!DOCTYPE html>
<html>
<head>

<?php
	/*Connexion à la base de données sur le serveur tp-epua*/
	$conn = @mysqli_connect("tp-epua:3308", "sangouam", "gi3y7fph");    
		
	/*connexion à la base de donnée depuis la machine virtuelle INFO642*/
	/*$conn = @mysqli_connect("localhost", "etu", "bdtw2021");*/  

	if (mysqli_connect_errno()) {
        $msg = "erreur ". mysqli_connect_error();
    } else {  
        $msg = "connecté au serveur " . mysqli_get_host_info($conn);
		
        /*Sélection de la base de données*/
        mysqli_select_db($conn, "sangouam"); 
		
        /*Encodage UTF8 pour les échanges avecla BD*/
        mysqli_query($conn, "SET NAMES UTF8");
    }
	echo $msg;
?>

<h1 class='titre'>Les Robots : </h1>
<link rel="stylesheet" href="lespages/page_5.css">
</head>
<body>
<p>Nous avons avons 2 robot a notre disposition :</p>
<div class="robot">
	<div class = "divPepper">
		<img class="imgPepper" src="documents/images/pepper.jpg" alt="Pepper" /><br/> 
		Pepper
	</div>
	<div class = "divNao">
		<img class="imgNao" src="documents/images/Nao.jpg" alt="Nao"  /><br/> 
		Nao
	</div>
</div>

<?php
$sql = "SELECT DISTINCT(categorie) FROM `Capteur`";
$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);
?>


<form>
<div class="form1">
<label>Actionneur :</label><br/>
   <select name="Actionneur" size="1">
   <option>Tout
   <?php while ($row = mysqli_fetch_assoc($result)){
      $categorie = $row["categorie"];?>
   <option><?php echo "$categorie"?>
   <?php } ?>
   </select>
</div>
<div class="form1">
<?php
$sql = "SELECT DISTINCT(type) FROM `Capteur`";
$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);
?>
<label>Type :</label><br/>
   <select name="Type" size="1">
   <option>Tout
   <?php while ($row = mysqli_fetch_assoc($result)){
      $type = $row["type"];?>
   <option><?php echo "$type"?>
   <?php } ?>
   </select>
</div>
   
<?php
$sql = "SELECT DISTINCT(robot) FROM `Capteur`";
$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);
?>
<div class="form1">
	<label>Robot :</label><br/>
   <select name="robot" size="1">
   <option>Tout
   <?php while ($row = mysqli_fetch_assoc($result)){
      $robot = $row["robot"];?>
   <option><?php echo "$robot"?>
   <?php } ?>
   </select>
</div>
   
<?php
$sql = "SELECT DISTINCT(lieux) FROM `Capteur`";
$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);
?>
<div class="form1">
	<label>Membre :</label><br/>
   <select name="lieux" size="1">
   <option>Tout
   <?php while ($row = mysqli_fetch_assoc($result)){
      $lieux = $row["lieux"];?>
   <option><?php echo "$lieux"?>
   <?php } ?>
   </select>
</div>
   
   
   <input type="hidden" name="page" value="5">
   <button type="submit" > Envoyer </button>
</form>



<?php
if (isset($_GET["Actionneur"])){
   $Actionneur = $_GET["Actionneur"];
   $Type = $_GET["Type"];
   $robot = $_GET["robot"];
   $lieux = $_GET["lieux"];
   
   if ($Actionneur == "Tout"){
	   $Actionneur = 'categorie';
   }else{
	   $Actionneur = '"'.$Actionneur.'"';
   }
   
   if ($Type == "Tout"){
	   $Type = 'type';
   }else{
	   $Type = '"'.$Type.'"';
   }
   if ($robot == "Tout"){
	   $robot = 'robot';
   }else{
	   $robot = '"'.$robot.'"';
   }
   if ($lieux == "Tout"){
	   $lieux = 'lieux';
   }else{
	   $lieux = '"'.$lieux.'"';
   }
   
   
   $sql = "SELECT * FROM `Capteur` WHERE  categorie = ".(string)$Actionneur." and type = ".(string)$Type." and robot = ".(string)$robot." and lieux = ".(string)$lieux;
   echo $sql;
   $result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);
   /*
   while ($row = mysqli_fetch_assoc($result)) { //on extrait les capteurs 
   echo "<br/>\n";
   echo $row["titre"]." ".$row["categorie"]." ".$row["type"]." ".$row["robot"]." ".$row["lieux"]."<br/>\n";

   }
   */

?>
<table>
    <thead>
        <tr>
            <th colspan="5">Les capteurs</th>
        </tr>
        <tr>
           <th>Nom</th>
           <th>Categorie</th>
           <th>Type</th>
           <th>Robot</th>
           <th>Lieux</th>
        </tr>
    </thead>
    <tbody>
        
         <?php
         while ($row = mysqli_fetch_assoc($result)) { //on extrait les capteurs ?>  
            <tr><td><?php echo $row["titre"] ?></td>
            <td><?php echo $row["categorie"] ?></td>
            <td><?php echo $row["type"] ?></td>
            <td><?php echo $row["robot"] ?></td>
            <td><?php echo $row["lieux"] ?></td></tr>
         <?php } ?>

            </tbody>
</table>
<?php 
}

?>









</body>
</html>