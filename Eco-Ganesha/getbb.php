<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$servername = "localhost";
$username = "jantha";
$password = "Jantha123@";
$dbname = "betterbangalore";
$category=$_POST['category'];
$name=$_POST['Name'];
$phone=$_POST['Phone'];
$address=$_POST['Address'];
$image=$_POST['fileToUpload'];
$lat=$_POST['Latitude'];
$lon=$_POST['Longitude'];

// $image=$_POST['image'];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM ecoganesh";
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