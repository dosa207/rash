<?php
function auth($login, $passwd)
{
	$file = "../private/passwd";
	if (file_exists($file) == TRUE && $login != "" && $passwd != "")
	{
		$passwd = hash("whirlpool", $passwd);
		$continut = unserialize(file_get_contents($file));
		foreach ($continut as $val)
			if ($val['login'] == $login && $val['passwd'] == $passwd)
				return (TRUE);
	}
	return (FALSE);
}
?>
