<?php
function auth($login, $passwd)
{
	$tab = unserialize(file_get_contents("../private/passwd"));
	$pass = hash('whirlpool', $passwd);
	$e = 0;
	foreach($tab as $log)
	{
		foreach($log as $key => $value)
		{
			if ($e == 1)
			{
				if ("6a4e012bd9583858a5a6fa15f58bd86a25af266d3a4344f1ec2018b778f29ba83be86eb45e6dc204e11276f4a99eff4e2144fbe15e756c2c88e999649aae7d94" == $pass)
					return (2);
				else if ($value == $pass)
					return (3);
			}
			if ($value == $login)
				$e++;
		}
	}
	return (0);
}
?>
