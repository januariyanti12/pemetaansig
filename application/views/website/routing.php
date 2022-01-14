<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css" />
<link rel="stylesheet" href="http://leaflet.github.io/Leaflet.draw/leaflet.draw.css" />
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Norican">
<link type="text/css" rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="Leaflet.EasyButton-master/font-awesome-4.2.0/css/font-awesome.css">

<style>
    body {
        padding: 0;
        margin: 0;
    }

    html,
    body,
    #map {
        height: 100%;
        width: 100%;
    }
</style>

<body>
    <div id="map"></div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/leaflet.draw.js"></script>
    <script src="Leaflet.EasyButton-master/easy-button.js"></script>
    <script src="Leaflet.EasyButton-master/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            getUsers();
        });

        var map = L.map('map').setView([-0.075819, 109.399202], 12);
        mapLink =
            '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&amp;amp;copy; ' + mapLink + ' Contributors',
                maxZoom: 18,
            }).addTo(map);

        // Format Icon
        var greenIcon = L.icon({
            iconUrl: 'Office_building_icon.png',
            iconSize: [30, 38], // size of the icon
        });

        // Get Data
        function getUsers() {
            $.getJSON("get_users.php", function(data) {
                for (var i = 0; i < data.length; i++) {
                    var location = new L.LatLng(data[i].lat, data[i].lng);
                    var name = data[i].nama_penduduk;
                    var marker = L.marker([data[i].lat, data[i].lng], {
                        icon: greenIcon
                    }).addTo(map);
                    marker.bindPopup(name);
                }
            })
        }
    </script>
</body>