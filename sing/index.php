<?php
if (isset($_POST["submit"]) && $_POST["submit"] == "ok")
{
	include ("auth.php");
	session_start();
	if (auth($_POST['login'], $_POST['passwd']))
	{
		$_SESSION["loggued_on_user"] = $_POST['login'];
		header("Location: ../install.php");
	}
	else
	{
		$_SESSION["loggued_on_user"] = "";
		header("Location: index.php?log=0");
	}
}
?>
<style>
body {
	background-image: url("wood.jpg");
	background-repeat: no-repeat;
	background-size: cover;
}

form {border: 3px solid #f1f1f1;
	width: 50%;
	margin: 15% auto;
}

input[type=text], input[type=password] {
	margin: 15px 8px;
	width: 98%;
	padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

#ok {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 30px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

#login_div {
	padding: 8px 8px;
}

#create, #modif {
	background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    border: none;
    margin: 30px 0;
    cursor: pointer;
    width: 30%;
}

#modif {
	float: right;
}

</style>

<html>
	<body>
		<form action="index.php" method="post">
			<div id="login_div">
				<?php if (isset($_GET['log'])) echo ($_GET['log'] == 1) ? "OK" : "ERROR";?>
				<h3>Regist:</h3>
				Login:<br>
				<input type="text" name="login"><br>
				Passwd:<br>
				<input type="password" name="passwd"><br><br>
				<input type="submit" id="ok" name="submit" value="ok">
				<input type="submit" id="create" formaction="create_html.php" value="create">
				<input type="submit" id="modif" formaction="modif_html.php" value="modif">
			<div>
		</form>
	</body>
</html>
