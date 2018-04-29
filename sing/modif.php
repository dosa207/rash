<?php
$file = "../private/passwd";
if (file_exists($file) && $_POST['login'] != "" && $_POST['newpw'] != "" && $_POST['oldpw'] != "") {
	$pw = hash('whirlpool', $_POST['newpw']);
	$pw_old = hash('whirlpool', $_POST['oldpw']);
	$continut = unserialize(file_get_contents($file));
	foreach ($continut as $key => $val)
		if ($val['login'] == $_POST['login'] && $val['passwd'] == $pw_old)
		{
			$continut[$key]['passwd'] = $pw;
			file_put_contents($file, serialize($continut));
			header("Location: index.php?log=1");
			return ;
		}
}
header("Location: modif_html.php?mod=0");
?>
