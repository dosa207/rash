<?php
$file = "../private/passwd";
if ($_POST['login'] != "" && $_POST['passwd'] != "" && file_exists($file) == TRUE)
{
	$is = 0;
	$continut = unserialize(file_get_contents($file));
	foreach ($continut as $val)
		if ($val['login'] == $_POST['login'])
			$is = 1;
	if ($is)
		header("Location: create_html.php?log=0");
	else {
		$continut[] = array('login'=>$_POST['login'], 'passwd'=>hash('whirlpool', $_POST['passwd']));
		file_put_contents($file, serialize($continut));
		header("Location: index.php?log=1");
	}
} else
	header("Location: create_html.php?log=0");
?>
