<?php
function login_exist($tab, $user)
{
	$i = 0;
	if (!$user)
		return (-1);
	foreach ($tab as $login)
	{
		if (is_array($login)) 
		foreach ($login as $log)
		{
			if ($log == $user)
				return ($i);
		}
		$i++;
	}
	return (-1);
}

?>
