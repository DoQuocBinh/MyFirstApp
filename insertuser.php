<html>
<body>

<form method="post">
	id: <input type="text" name="id"/><br>
	Name: <input type="text" name="name"><br>
<input type="submit">
</form>
<?php
	if (isset($_POST["id"]) && isset($_POST["name"])) {
        $eid = $_POST["id"];
        $name = $_POST["name"];
        //khoi tao ket noi den csdl
        if (empty(getenv("DATABASE_URL"))){
            $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=myDB', 'postgres', '123456');
        }  else {
           $db = parse_url(getenv("DATABASE_URL"));
           $pdo = new PDO("pgsql:" . sprintf(
                "host=%s;port=%s;user=%s;password=%s;dbname=%s",
                $db["host"],
                $db["port"],
                $db["user"],
                $db["pass"],
                ltrim($db["path"], "/")
           ));
        } 
        $data = [
		    'id' => $eid,
		    'name' => $name
		];
		$sql = "INSERT INTO label (id, name) VALUES (:id, :name)";
		$stmt= $pdo->prepare($sql);
		$stmt->execute($data);

	}
?>

</body>
</html>
