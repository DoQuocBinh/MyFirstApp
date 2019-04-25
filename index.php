<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello abc XYZ!";
?>

<?php
$txt1 = "Learn PHP";
$txt2 = "FPT Greenwich";
$x = 5;
$y = 5;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

// Create connection
$conn = pg_connect(getenv("DATABASE_URL"));
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,name from label";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "rows";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
