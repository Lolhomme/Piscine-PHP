<?PHP
if ($_GET["action"] === "set")
{
	setcookie($_GET["name"], $_GET["value"]);
}
else if ($_GET["action"] === "get")
{
	if ($_COOKIE[$_GET["name"]] != FALSE)
		echo $_COOKIE[$_GET["name"]] . "\n";
}
else if ($_GET["action"] === "del")
{
	setcookie($_GET["name"], "should not exist", 1);
}
?>
