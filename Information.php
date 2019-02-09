<!DOCTYPE html>
<html>
<head>
	<title>FICHE D'INFORMATIONS</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	form{
		background-color: lime ;
        width: 50%;
	}
    label{
    	text-align: center;
    }
    legend{
    	background-color: aqua;
    }
    footer{
    	text-align: center;
    	background-color: lime;
    }
    body{
    	background-color: gray;
    }

    img{
    	font-size: 100%;
     }

    
</style>
<body>

	<div align="center">
	<form method="POST" action="recueil.php">
		<legend><br> VOS COORDONEES PERSONNELLES <br><br></legend>
		<fieldset>
		<table>
		<img src="téléchargé.png" width="15%" height="10%"><br><br><br>

		<label for="Prénom"><small>Prénom: </small></label>
		<input type="text" name="Prénom" placeholder="Votre Prénom"><br><br><br>

		<label for="Nom"><small>Nom: </small></label>
		<input type="text" name="Nom" placeholder="Votre Nom"><br><br><br>

		<label for="Email"><small> Email: </small></label>
        <input type=Email" id="Email" name="Email" placeholder="kande@gmail.com"><br><br><br>

        <label for="password"><small> Mot de passe: </small></label>
        <input type="password" name="mpd1" placeholder="Mot de passe"><br><br><br>

        <label for="password"><small>Confirmer: </small></label>
        <input type="password" name="mpd2" placeholder="Confirmer passe"><br><br><br>

		<label for="Téléphone"> <small>Téléphone: </small></label>
		<input type="text" name="Téléphone" placeholder=" 77 667 49 07"><br><br><br>

		<input type="submit" name="Valider" align="rigth">
        </table>
	</form></fieldset></div>
	<footer width: 100%;> 
	<p>Pour plus d'informations contactez-nous sur</p>
	<p>saidouyoussouphk@gmail.com    ou  le 77 667 49 07 </p><br>
	</footer>
</body>
</html>