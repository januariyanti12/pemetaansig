	<link rel="stylesheet" href="<?= base_url('assets/js/leaflet-compass-master/src/leaflet-compass.css') ?>" />
	<!-- Make sure you put this AFTER Leaflet's CSS -->
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHqhgVQmhdp3XAJ91LHRdXJ3YOjP1V2Gs" async defer></script>
	<script src="<?= base_url('assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js') ?>"></script>
	<script src="<?= base_url('assets/js/leaflet.ajax.js') ?>"></script>
	<script src="<?= base_url('assets/js/leaflet-compass-master/src/leaflet-compass.js') ?>"></script>
	<script src="<?= base_url('assets/js/Leaflet.GoogleMutant.js') ?>"></script>
	<script src="<?= site_url('admin/api/data/penduduk') ?>"></script>

	<script type="text/javascript">
		var map = L.map('map').setView([-0.075819, 109.399202], 12);
		var layersKecamatan = [];
		var Layer = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			maxZoom: 18,
			id: 'mapbox.streets',
			accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
		});
		var roadMutant = L.gridLayer.googleMutant({
			maxZoom: 24,
			type: 'roadmap'
		});

		map.addLayer(Layer);

		var myStyle2 = {
			"color": "#ffff00",
			"weight": 1,
			"opacity": 0.9
		};


		function popUp(f, l) {
			var html = '';
			if (f.properties) {
				html += '<table>';
				html += '<tr>';
				html += '<td colspan="3"><img src="<?= base_url('assets/icon-map.png') ?>" width="100%"></td>';
				html += '</tr>';
				html += '<tr>';
				html += '<td>Provinsi</td>';
				html += '<td>:</td>';
				html += '<td>' + f.properties['PROVINSI'] + '</td>';
				html += '</tr>';
				html += '<tr>';
				html += '<td>Kecamatan</td>';
				html += '<td>:</td>';
				html += '<td>' + f.properties['KECAMATAN'] + '</td>';
				html += '</tr>';
				html += '</table>';
				html += '<a href="<?= site_url('kecamatan') ?>" target="_BLANK">' +
					'<button  class="btn btn-info btn-sm" ><i class="fa fa-info"></i> Info</button></a>';
				l.bindPopup(html);
				l.bindTooltip(f.properties['KECAMATAN'], {
					permanent: true,
					direction: "center",
					className: "no-background"
				});
			}
		}

		// legend

		function iconByName(name) {
			return '<i class="icon" style="background-color:' + name + ';border-radius:50%"></i>';
		}


		var baseLayers = [{
				name: "OpenStreetMap",
				layer: Layer
			},
			{
				name: "OpenCycleMap",
				layer: L.tileLayer('http://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
			},
			{
				name: "Outdoors",
				layer: L.tileLayer('http://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}.png')
			},
			{
				name: 'Satelite Google',
				layer: L.gridLayer.googleMutant({
					maxZoom: 24,
					type: 'satellite'
				})
			},
			{
				name: "Roadmap Google",
				layer: roadMutant
			}
		];
	</script>