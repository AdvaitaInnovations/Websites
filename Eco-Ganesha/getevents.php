<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$servername = "localhost:3309";
$username = "root";
$password = "";
$dbname = "geolocation";
$name=$_POST['name'];
$lat=$_POST['latitude'];
$lon=$_POST['longitude'];
$category=$_POST['category'];
$landmark=$_POST['landmark'];
$shop=$_POST['shop'];
// $image=$_POST['image'];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM ganevent";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
    $rows [] =$row;
    }
    echo json_encode($rows);
} else {
    echo "0 results";
}

$conn->close();?>