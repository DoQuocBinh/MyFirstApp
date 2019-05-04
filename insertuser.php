<html>
<body>

<form method="post">
	id: <input type="text" name="id"/><br>
	Name: <input type="text" name="name"><br>
<input type="submit">
</form>
<?php
	if (isset($_POST["id"]) && isset($_POST["name"])) {
		var $eid = $_POST["id"];
		var $name = $_POST["name"];
		//khoi tao ket noi den csdl
		$db = parse_url(getenv("DATABASE_URL"));
   		

	}
?>

</body>
</html>
