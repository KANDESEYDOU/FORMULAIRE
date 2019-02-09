<!DOCTYPE html>
<html>

<style type="text/css">
	body{
		background-color: white;
	}
	div, h2 {
		text-align: center;
	}
	table{
		 width: 50%;
		 border-color: blue;
	}
	fieldset{
		background-image: url(im.jpg);
		background-repeat: no-repeat;
		background-size: 100%;
	}
</style>
<head>
	<title>COORDONEES PERSONNELLES</title><br><br>
	<h2>LES INFORMATIONS DONNEES PAR L'UTILISATEUR</h2><br><br>
</head>

<body>
<fieldset>
<table>
<div><br>
<?php
	if(isset($_POST['Prénom'])){
	 echo "Prénom :";
	 echo "  ";
     echo $_POST['Prénom'] ;
} ?>  <br><br><br>
<?php
if(isset($_POST['Nom'])){
	 echo "Nom :";
	 echo "  ";
     echo $_POST['Nom'] ; 
} ?>  <br><br><br>
<?php
if(isset($_POST['Email'])){
	 echo "Votre email :";
	 echo "  ";
     echo $_POST['Email'] ; 
} ?>  <br><br><br>
<?php
if(isset($_POST['mpd1']) == isset($_POST['mpd2'])){
	 echo "Votre mot de passe est correcte :";
	 echo "  ";
     echo "***********" ; 
}
else if ( (isset($_POST['mpd1'])) !=  (isset($_POST['mpd2'])) ) {

	echo "Mot de passe incorrecte";
}
 ?>  <br><br><br>
<?php
if(isset($_POST['Téléphone'])){
	echo "Numero de Téléphone :";
	echo "  ";
    echo $_POST['Téléphone'] ;
} ?> 
<h2>INFORMATION TRANSMISE AVEC SUCCES</h2>
</div>
</table>
</body>
</fieldset>
</html>