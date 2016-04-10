<?php

function login($login, $passwd)
{
	include_once 'auth.php';
	session_start();
	switch (auth($login, $passwd))
	{
			case 2:
				$_SESSION["admin"] = "OK";
				$_SESSION["guest"] = NULL;
				$_SESSION["loggued_on_user"] = "admin";
				return (2);
				break;

			case 3:
				$_SESSION["admin"] = NULL;
				$_SESSION["guest"] = NULL;
				$_SESSION["loggued_on_user"] = $login;
				return (3);
				break;

			default:
				$_SESSION["admin"] = NULL;
				$_SESSION["guest"] = "OK";
				$_SESSION["loggued_on_user"] = NULL;
				return (4);
				break;
	}
	return (0);
	/*if (auth($login, $passwd) == 2)
	{
		$_SESSION["admin"] = "OK";
		$_SESSION["guest"] = NULL;
		$_SESSION["loggued_on_user"] = "admin";
		return (2);
	}
	else if (auth($login, $passwd) == 3)
	{
		$_SESSION["admin"] = NULL;
		$_SESSION["guest"] = NULL;
		$_SESSION["loggued_on_user"] = $login;
		return (3);
	}
	else
	{
		$_SESSION["admin"] = NULL;
		$_SESSION["guest"] = "OK";
		$_SESSION["loggued_on_user"] = NULL;
		return (4);
	}
	return (0);*/
}

?>
