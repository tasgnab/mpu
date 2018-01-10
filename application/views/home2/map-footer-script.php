<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript">
    function initialize() {
        var latlng = new google.maps.LatLng(23.438126, 113.305104);
        var myOptions = {
            zoom: 15,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map3"), myOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(23.438126, 113.305104),
            map: map,
            icon: 'assets/home2/images/marker.png'
        });
    }
    google.maps.event.addDomListener(window, "load", initialize);
</script>