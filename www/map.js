var map_config = {
	fileExt		: 'png',
	tileSize	: 256,
	defaultZoom	: 0,
	cacheMinutes	: 0,
	debug		: false
};


//
// a very simple projection
//

function WoWMapProjection(){}
  
WoWMapProjection.prototype.fromLatLngToPoint = function(latLng){
	var x = latLng.lng() * map_config.tileSize;
	var y = latLng.lat() * map_config.tileSize;
	return new google.maps.Point(x, y);
};

WoWMapProjection.prototype.fromPointToLatLng = function(point){
	var lng = point.x * (1.0 / map_config.tileSize);
	var lat = point.y * (1.0 / map_config.tileSize);
	return new google.maps.LatLng(lat, lng);
};


function LatLngToPixels(latLng){

	var pnt = WoWMapProjection.prototype.fromLatLngToPoint(latLng);
	return [pnt.x * 8, pnt.y * 8];
}

function PixelsToLatLng(pxs){

	var pnt = {x: pxs[0] / 8, y: pxs[1] / 8};
	return WoWMapProjection.prototype.fromPointToLatLng(pnt);
}



var map;
var WoWMapOptions;
    
function initialize() {

	//
	// the class for our map layer
	//

	var num_layers = 0;
	for (var i in tiles_config.layers) num_layers++;

	WoWMapOptions = {

		getTileUrl: function(tile, zoom) {

			//console.log(tile.x, tile.y);

			if (tile.x < 0 || tile.y < 0) return null;

			var z = 1 + ((num_layers-2) - zoom);

			if (tiles_config.layers[z][0] < tile.x) return null;
			if (tiles_config.layers[z][1] < tile.y) return null;

			var tx = ""+tile.x;
			var ty = ""+tile.y;
			while (tx.length < 2) tx = "0"+tx;
			while (ty.length < 2) ty = "0"+ty;

			var url = tiles_config.stem+'tile_z'+z+'_'+tx+'_'+ty+'.png';
			//console.log(tile, url);

			return url;
		},
		tileSize: new google.maps.Size(map_config.tileSize, map_config.tileSize),
		maxZoom:  num_layers-1,
		minZoom:  0,
		isPng:    false
	};
  
	var WoWMapType = new google.maps.ImageMapType(WoWMapOptions);
	WoWMapType.name = "WoW Map";
	WoWMapType.alt = "World of Warcraft Map";
	WoWMapType.projection = new WoWMapProjection();


	var mapOptions = {
		backgroundColor: tiles_config.bgcolor,
		zoom: map_config.defaultZoom,
		center: new google.maps.LatLng(tiles_config.center[0], tiles_config.center[1]),

		zoomControl: true,
		zoomControlOptions: { style: google.maps.ZoomControlStyle.LARGE },
		panControl: false,
		rotateControl: false,
		overviewMapControl: false,
		scaleControl: false,
		mapTypeControl: false,
		streetViewControl: false,

		mapTypeId: 'WoWmap'
	};
	map = new google.maps.Map(document.getElementById("map"), mapOptions);

	// Now attach the coordinate map type to the map's registry
	map.mapTypes.set('WoWmap', WoWMapType);
  
	// We can now set the map to use the 'coordinate' map type
	map.setMapTypeId('WoWmap');



	// deal with hash stuff
	hash_init();
	google.maps.event.addListener(map, 'dragend', hash_update);
	google.maps.event.addListener(map, 'zoom_changed', hash_update);
}

function hash_init(){
	if (window.location.hash.split("/").length > 1){
		hash_goto();
		hash_update();
	}
}

function hash_update(){
	var pos = LatLngToPixels(map.getCenter());
	var zoom = map.getZoom();
	hash_set(pos[0], pos[1], zoom);
}

function hash_set(x, y, zoom){
	window.location.replace("#/" + Math.floor(x) + "/" + Math.floor(y) + "/" + zoom + "/");
}

function hash_goto(){

	var coords = window.location.hash.split("/");
	var latlng = PixelsToLatLng([parseInt(coords[1]), parseInt(coords[2])]);

	var zoom = parseInt(coords[3]);
	if (zoom < 0 || zoom > WoWMapOptions.maxZoom){
		zoom = map_config.defaultZoom;
	}
			
	map.setCenter(latlng);
	map.setZoom(zoom);
}



$(document).ready(function(){

	$("ul#nav > li > ul").parent().addClass("tophassub");
	$("ul#nav ul ul").parent().addClass("subhassub");
});

