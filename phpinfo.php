<?php
//phpinfo();
$servername= "mariadb";
$username= "manuel";
$password= "123456";
$db = 'hallo_db';

$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
    echo "alles ok";
}


$sql = "SELECT * FROM user;";
$result = $conn->query($sql);
var_dump($result->fetch_all(1));
