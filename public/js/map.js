// Variables
var map;
var infowindow;
var color = 'https://mt.googleapis.com/vt/icon/name=icons/spotlight/spotlight-poi.png&scale=1'

// Initialisation de la carte
function initializeMap() {
	var x = Array.from(document.getElementsByClassName("containerAgency")).map(div=>JSON.parse(div.attributes.value.value));
	console.log(x);
	var styles = [{
		"featureType": "poi",
		"elementType": "labels",
		"stylers": [
		  {
		  	"visibility": "off"
		  }
		]
	}, {
		"featureType": "transit",
		"stylers": [
		  {
		  	"visibility": "off"
		  }
		]
	}]
	var options = {
		zoom: 6,
		center: new google.maps.LatLng(46.227638, 2.213749000000007),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		//draggableCursor: 'crosshair ',
		styles: styles,
	};
	map = new google.maps.Map(document.getElementById('map'), options);
	// Création du tooltips
	infowindow = new google.maps.InfoWindow();
	// Add close event
	google.maps.event.addListener(map, "click", function(event) {
		infowindow.close();
	});
	
	// Création des markers
	for (var i = 0; i < x.length; i++) {
		var row = x[i];
		var nom = row.city;
		var address = row.address;
		var phone = row.phone;
		var lat = row.lat;
		var lng = row.lng;
		var icon = color;

		var infos = '<h3>' + nom + '</h3>' +
			'<div>' + address + '</div>' + 
			'<div>' + phone + '</div>';
		// Ajout du marker
		addMarker(lat, lng, icon, infos);
	}
}

// Ajout d'un marker sur la carte
function addMarker(latitude, longitude, icon, infos) {
	// Création du marker
	var markerPoint = new google.maps.LatLng(latitude, longitude);
	var marker = new google.maps.Marker({
		position: markerPoint,
		icon: icon,
		map: map,
	});
	marker.infos = infos;
	// Ajout de l'event click pour afficher le toolstip
	marker.addListener('click', function () {
		infowindow.setContent(marker.infos);
		infowindow.open(map, marker);
	});
}

