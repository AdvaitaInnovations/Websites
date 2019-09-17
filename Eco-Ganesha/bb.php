<!DOCTYPE HTML>  
<html>
<head>
	   <title>Eco-Ganesha</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	
<script>
function myMap() {
  window.location.href="map.html";
}
function myFunction() {
  window.location.href="index.html";
}

   var lat = localStorage.getItem("lat");
   var lon = localStorage.getItem("lon");
   //document.getElementById("demo").innerHTML = ("lat :"+lat  +" "+"lon :"+lon);

</script>
<style>
.error {color: #FF0000;}
input[type=submit]{
	width:10em;
	font-size:35px;
}
#sharebuttons {
width: 35px;
padding: 5px;
border: 0;
box-shadow: 0;
display: inline;
font-size: 25px;
   font-size: 2.5rem;
}
 
</style>
</head>
<body>  

<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

 $servername = "localhost";
 $username = "jantha";
 $password = "Jantha123@";
 $dbname = "betterbangalore";
$category=$_POST['category'];
$name=$_POST['Name'];
$phone=$_POST['phone'];
$address=$_POST['Address'];
$filename = $_FILES['fileToUpload']['name'];
//$image=$FILES['fileToUpload']['name'];
$lat=$_POST['Latitude'];
$lon=$_POST['Longitude'];

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['fileToUploadsub'])) {
//declaring variables
$filename = $_FILES['fileToUpload']['name'];
$filetmpname = $_FILES['fileToUpload']['tmp_name'];
//folder where images will be uploaded
$folder = 'imagesupload/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
}
$sql = "INSERT INTO ecoganesh (category,lat,lon,address,image,name,phone) VALUES ('$category','$lat','$lon','$address','$filename','$name','$phone')";



if ($conn->query($sql) === TRUE) {
     echo '<span style="font-size:60px;">Thank you for sharing your details!</span><br><br>';
	  echo '<span style="color:blue;font-size:60px;">Share this link with your friends in the city.</span><br><br>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 
// $sql = "SELECT * FROM gg";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//      while($row = $result->fetch_assoc()) {
//     $rows [] =$row;
//     }
//     echo json_encode($rows);
// } else {
//     echo "0 results";
// }


$conn->close();?>
<div id="sharebuttons">
<div class="a2a_kit a2a_kit_size_100 a2a_default_style" data-a2a-url="campaigns.jantha.in">
<!-- <a class="a2a_dd" href="https://www.addtoany.com/share"></a> -->
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>

<a class="a2a_button_google_gmail"></a>
<a class="a2a_button_email"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script></br></br>
</div>
  <!-- <input type="submit" class="btn btn-primary" onclick="myMap()" value="View Map"/>-->


 <input type="submit" class="btn btn-primary" value="Close"onclick="myFunction()"/>


</body>
</html>



