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
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

// Create connection
$conn = pg_connect(getenv("postgres://puhtyxjlxdqslr:83febabb899c86fb498d48fc44c86b4c1684a3dfb8b228b865b62c4a6a783460@ec2-23-21-106-241.compute-1.amazonaws.com:5432/d5lj5env91t2ia"));
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,name from label";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"] .  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
