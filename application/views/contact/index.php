<!DOCTYPE HTML SYSTEM>
<html>
<head>
    {templates_head}

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

