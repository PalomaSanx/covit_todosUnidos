<?php
include 'global/config.php';
include 'templates/cabecera.php';
?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />

<!-- section: blog -->
<section id="blog" class="section">
    <div class="container" align="center">
        <h4>Puedes ayudar clicando sobre alguno de los inconos del mapa</h4>
        <!-- Three columns -->
        <div id='map' style="width: 1000px; height: 1000px;">
        </div>
    </div>
</section>




<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
<!--JS del mapa 'donde estamos', carga el mapa según DOM (id map)-->
<script>
    var map = L.map('map').
    setView([38.9942400, -1.8564300],
        13);

    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
        maxZoom: 18
    }).addTo(map);

    L.control.scale().addTo(map);
    //L.marker([38.9942400, -1.8564300], {draggable: true}).addTo(map);	
    L.marker([38.9942400, -1.8564300]).addTo(map).bindPopup("<b>Sede principal").openPopup();
</script>
        

<script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(84674)</script>
</body>

</html>