<!DOCTYPE HTML SYSTEM>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brown Shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/mbase.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHTLSGjLU2M3HpNdXImDESsvg49HcN2oI&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
{templates_header}
{templates_menu}
{contact_contact}
{templates_footer}
<script>

    $(document).ready(function(){
        function loadMap() {
            var center = {lat: 10.7897,  lng: 106.71510 } ;
            var map = new google.maps.Map(document.getElementById('contact-send-map'), {
                zoom: 16,
                center: center,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                clickableIcons: false
            });
            google.maps.event.trigger(map, 'resize');
            addMarker(center, map)
        }
        function addMarker(location, map) {
            var contentString = $('#map-info').html();
            console.log(contentString);
            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                disableAutoPan: true,
                closeBoxURL: ""
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                infowindow: infowindow
            });
            infowindow.open(map, marker);

        }
        loadMap();
    });

</script>

</body>
</html>

