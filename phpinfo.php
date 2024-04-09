<?php
//phpinfo();
$servername = "mariadb"; # nicht localhost, sondern aus der compose.yaml
$username = "manuel"; # ebenso aus der compose.yaml
$password = "123456";  # ebenso aus der compose.yaml
$db = 'hallo_db'; # ebenso aus der compose.yaml

$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "alles ok";
}


$sql = "SELECT * FROM user;";
$result = $conn->query($sql);
var_dump($result->fetch_all(1));
