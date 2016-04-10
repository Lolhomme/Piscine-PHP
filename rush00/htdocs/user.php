<?php
session_start();
if (!$_SESSION["loggued_on_user"])
	header('Location: index.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Yummy</title>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<script>
		function confirm_del(){
			confirm("Etes-vous sur de vouloir supprimer votre compte ?");
		}
	</script>
</head>
<body>
	<div id="header">
		<div id="logo">
			<h1><a href="index.php">Yummy</a></h1>
		</div>
		<div id="form">
			Votre compte 
		</div>
	</div>
	<div id="main">
		<div id="panel"></div>
		<div id="content">
			<div id="about">
				<h2>Parametres du compte</h2><br>
					<fieldset>	
						<legend>Changer de mot de passe</legend>
						<form action="modif.php" method="post">
							<br>
							Ancien mot de passe<br>
							<input type="password" name="oldpw"><br>
							Nouveau mot de passe<br>
							<input type="password" name="newpw"><br>
							Confirmation du nouveau mot de passe<br>
							<input type="password" name="newpw2"><br>
							<button type="submit" name="submit" value="change_pw">Changer votre mot de passe</button><br>
					</fieldset>
					<br>
					<fieldset>
					<legend>Supprimer votre compte</legend>
					Identifiant<br>
					<input type="text" name="login"><br>
					<br>
					Mot de passe<br>
					<input type="password" name="oldpw"><br>
					<button type="submit" name="submit" value="delete" onclick="confirm_del()">Confirmer</button> 
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
