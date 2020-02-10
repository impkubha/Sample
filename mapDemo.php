<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div id="map-canvas"></div>
<button id="get" onclick="calculateRoute()">Get Direction </button>
<script>
var directionsDisplay =new google.maps.DirectionsRenderer();
var directionsService =new google.maps.DirectionsService();
var map;
var boudha = new google.maps.LatLng(27.721503,85.362072);
var hattisar = new google.maps.LatLng(27.711360,85.318781);
var mapOptions ={
zoom:14,
center:boudha
};
map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
directionsDisplay.setMap(map);

function calculateRoute(){
var request={
origin:boudha,
destination:hattisar,
travelMode:'DRIVING'
};
directionService.route(request,funtion(result,status)){
if(status == "OK"){
directionDisplay.setDirection(result);
}
};
}
document.getElementById('get').onClick=function(){
calculateRoute();
};
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>