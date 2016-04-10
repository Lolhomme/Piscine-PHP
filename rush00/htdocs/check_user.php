<?php

include 'login.php';
if (($_POST["register"] == "Se connecter") && (!$_POST["login"] || !$_POST["passwd"]))
		header('Location: index.php');
else
{
	if ($_POST["register"] == "Se connecter")
	{
		if (login($_POST[login], $_POST[passwd]) == 2)
			header('Location: admin/admin.php');
		else if (login($_POST[login], $_POST[passwd]) == 3)
			header('Location: user.php');
		else
			header('Location: index.php');
	}
	else if ($_POST["register"] == "S'inscrire")
		header('Location: register.php');
}
?>
