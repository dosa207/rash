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

#back {
	background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    border: none;
    margin: 30px 0;
    cursor: pointer;
    width: 30%;
}
</style>

<html>
	<body>
		<form action="create.php" method="post">
			<div id="login_div">
				<?php if (isset($_GET['log'])) echo "ERROR";?>
				<h3>Create</h3>
				Login:<br>
				<input type="text" name="login"><br>
				Passwd:<br>
				<input type="password" name="passwd"><br><br>
				<input type="submit" id="ok" name="submit" value="OK">
				<input type="submit" id="back" formaction="index.php" value="back">
			</div>
		</form>
	</body>
</html>
