// Variables
var map;
var infowindow;
var  data = [
	//['Nom', 'Adresse', Latitude, Longitude, 'Catégorie'],
	//['Nante', 'Ville de Nantes', 47.218371, -1.553621000000021, 'cat1'],
	//['Home', '16 Grande Rue, 44160 Pontchâteau, France', 47.4353077, -2.0916818000000603, 'cat2'],
	["Davy", "4 Ter Impasse Aimé Césaire, 44550 Montoir-de-Bretagne", 47.32549398026232, -2.13631336253294],
	["Productys", "9 Rue du 28 Février 1943, 44600 Saint-Nazaire", 47.27408674739853, -2.2079263306444923]
];

var x = JSON.stringify(document.getElementsByClassName("containerAgency").value);
	


var icons = {
	red: 'https://mt.googleapis.com/vt/icon/name=icons/spotlight/spotlight-poi.png&scale=1',
	//red: 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png',
	blue: 'https://mt.google.com/vt/icon?color=ff004C13&name=icons/spotlight/spotlight-waypoint-blue.png',
	green: 'https://mt.google.com/vt/icon?psize=30&font=fonts/arialuni_t.ttf&color=ff304C13&name=icons/spotlight/spotlight-waypoint-a.png&ax=43&ay=48&text=%E2%80%A2',
	purple: 'https://mt.google.com/vt/icon/name=icons/spotlight/spotlight-ad.png',

	//green_txt: 'https://mt.google.com/vt/icon?psize=16&font=fonts/Roboto-Regular.ttf&color=ff330000&name=icons/spotlight/spotlight-waypoint-a.png&ax=44&ay=48&scale=1&text='
}

// Initialisation de la carte
function initializeMap() {
	console.log(x)
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
	for (var i = 0; i < data.length; i++) {
		var row = data[i];
		var index = 0
		var nom = row[index++];
		var address = row[index++];
		var lat = row[index++];
		var lng = row[index++];
		var category = row[index++];
		var icon = icons.red;

		var infos = '<h3>' + nom + '</h3>' +
			'<div>' + address + '</div>' +
			'</br>' +
			'<b>Catégorie : </b>' + category + '';
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

