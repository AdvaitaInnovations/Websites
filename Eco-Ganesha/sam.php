<? php
$url = str_ireplace( 'http://', 'https://', $url );
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
 <link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145741958-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    Feature-Policy: geolocation '*'
    gtag('config', 'UA-145741958-1');
    </script>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eco-Ganesha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Leaflet's CSS -->
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
    integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
    integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
    crossorigin=""></script>
    


    <!-- Sweetalert JS-->
<!--     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 -->    <style>
            #mapid {
            height: 400px;
            width:600px;
            /*z-index: 1;
            padding: 20px;*/
            }


            body {font-family: Arial, Helvetica, sans-serif;}
            * {box-sizing: border-box;}

            .open-button {
              background-color: #555;
              color: white;
              padding: 16px 20px;
              border: none;
              cursor: pointer;
              opacity: 0.8;
              position: fixed;
              bottom: 23px;
              right: 28px;
              width: 280px;
            }

            /* The popup form - hidden by default */
            .form-popup {
              display: none;
              position: fixed;
              bottom: 0;
              right: 15px;
              border: 3px solid #f1f1f1;
              z-index: 1000;
            }

            /* Add styles to the form container */
            .form-container {
              max-width: 300px;
              padding: 10px;
              background-color: white;
            }

            /* Full-width input fields */
            .form-container input[type=text], .form-container input[type=password] {
              width: 100%;
              padding: 15px;
              margin: 5px 0 22px 0;
              border: none;
              background: #f1f1f1;
            }

            /* When the inputs get focus, do something */
            .form-container input[type=text]:focus, .form-container input[type=password]:focus {
              background-color: #ddd;
              outline: none;
            }

            /* Set a style for the submit/login button */
            .form-container .btn {
              background-color: #4CAF50;
              color: white;
              padding: 16px 20px;
              border: none;
              cursor: pointer;
              width: 100%;
              margin-bottom:10px;
              opacity: 0.8;
            }

            /* Add a red background color to the cancel button */
            .form-container .cancel {
              background-color: red;
            }

            /* Add some hover effects to buttons */
            .form-container .btn:hover, .open-button:hover {
              opacity: 1;
            }

    </style>
</head>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
    .column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
   
</head>

<body>
     
    <div class="row">
  <div class="column" style="background-color:white;padding-left:10px">
     <div id="mapid"></div>
     </br></br>
        
  </div>
  <div class="column" style="background-color:white;">
 <form action="index.html" Method="get">
 <div class="form-group">
        <p>The Location is <p id="locationdisplay"></p> </p>
         <div class="form-group">
            <label for="latitude"><b><br>Latitude</b></label>
            <input type="text" placeholder="Enter latitude" name="Latitude" required id="lat" />
        </div>
        <div class="form-group">
            <label for="longitude"><b><br>Longitude</b></label>
            <input type="text" placeholder="Enter longitude" name="Longitude" required id="long" />
        </div>
        
       <div class="form-group">
            <label for="location"><b><br>Location</b></label>
            <input type="text" placeholder="Location" readonly name="Location" required id="lcn">
        </div>
      
     
       <div class="row">
   
   <button   class="btn btn-primary"  onclick="myFunction()">Submit</button>

  
</div>

  </div>
  
        <style>
        input[type=file] {
              width: auto;

              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              border-radius: 20px;
              cursor: pointer;
          }
        input[type=file]:hover{
          opacity: 0.8;
        }
        </style>
            
       
       

    </div>
  </div>
</div>


    <script>
       var latt,lon;
          var HELSINKI = [12.925061, 77.585580];
        /* Display of map */
        var storeloc;
       var mymap = L.map('mapid'), infoWindow
         mymap.setView(HELSINKI, 14);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
            minZoom: 4,
            maxZoom: 20,
		     id: 'mapbox.streets',
        }).addTo(mymap);
		

        /* Geolocation - autolocate */
          //mymap.setView(HELSINKI, 14);
        function onLocationFound(e) {
            var radius = e.accuracy / 2;
            L.marker(e.latlng).addTo(mymap).bindPopup("You are within " + radius + " meters from this point");
            L.circle(e.latlng, radius).addTo(mymap);
            document.getElementById("locationdisplay").innerHTML = e.latlng;
            document.getElementById('lat').setAttribute("value", e.latlng.lat);
            document.getElementById('long').setAttribute("value", e.latlng.lng);
            document.getElementById('lcn').setAttribute("value", `${e.latlng.lat},${e.latlng.lng}`);
        }
           function myFunction() {

   
 
  

}
           
         
     
    

        /* Geolocation error */
        function onLocationError(e) {
           /* swal({
            icon: 'error',
            title: 'Oops',
            text: e.message,
            button: 'OK',
            }); */
			console.log("Error in getting location");
        }

        mymap.on('locationerror', onLocationError);
        mymap.on('locationfound', onLocationFound);
        
        /* Prompt for user to click on map */
        // swal({
        //     icon: 'info',
        //     text: 'Click anywhere on the map to pinpoint location of the problem you wish to report',
        //     button: 'OK',
        // });

        /* obtains lat-lng values and rounds it off */
        function onMapClick(e) {
            storeloc = e.latlng;
            console.log(storeloc);
            var one = Math.round(e.latlng.lat * 100000)/100000;
            var two = Math.round(e.latlng.lng * 100000)/100000;
            var res = one + "," + two;
            // swal({
            //     icon: 'info',
            //     text: 'Thank you for selecting location. Fill form below!',
            //     button: 'OK',
            //     });
            document.getElementById('locationdisplay').innerHTML = storeloc;
            document.getElementById('lat').value = one;
            document.getElementById('long').value = two;
            document.getElementById('lcn').value= res;
           localStorage.setItem("lat", document.getElementById('lat').value = one);
           localStorage.setItem("lon", document.getElementById('long').value = two)}
        mymap.on('click', onMapClick);

        /* Creating icon characteristics for inserting icon based on category */
        var category_icon = L.Icon.extend({
            options: {
                iconSize: [25, 25]
                }
        });
        
        /* We want bin to be smaller since map looks conjusted */
        var bin_icon = L.Icon.extend({
            options: {
                iconSize: [18,18]
            }
        })
         
        var lat = localStorage.getItem("lat");
  var lon = localStorage.getItem("lon");
   //alert("lat :"+lat+" "+"lon :"+lon);
       </script>
</form>
   </body>
</html>

    <script>console.log('GaneshaIdol');</script><script> var marker = L.marker([12.9247, 77.5906]).addTo(mymap);
                    marker.bindPopup(" <br> Jayanagar metro"); 
            </script><script>console.log('GaneshaIdol');</script><script> var marker = L.marker([12.9364, 77.5482]).addTo(mymap);
                    marker.bindPopup(" <br> "); 
            </script>



