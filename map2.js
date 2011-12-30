var map_config = {
	fileExt		: 'png',
	tileSize	: 256,
	defaultZoom	: 0,
	cacheMinutes	: 0,
	debug		: false
};

var tiles_config = {
	stem		: '/tiles/built/azeroth/',
	center		: [0.9, 1.3],
	bgcolor		: '#001D29',
	layers		: {
		5: [3,2],
		4: [6,4],
		3: [12,8],
		2: [24,16],
		1: [48,32],
		0: [84,59]
	}
};

var Xtiles_config = {
	stem		: '/tiles/built/outland/',
	center		: [0.7, 0.7],
	bgcolor		: '#000000',
	layers		: {
		4: [2,2],
		3: [4,4],
		2: [8,8],
		1: [16,16],
		0: [32,32]
	}
};

var Xtiles_config = {
	stem		: '/tiles/built/deepholm/',
	center		: [0.7, 0.7],
	bgcolor		: '#2E2D36',
	layers		: {
		2: [2,2],
		1: [4,4],
		0: [8,8]
	}
};

var Xtiles_config = {
	stem		: '/tiles/built/bg_eots/',
	center		: [0.9, 0.6],
	bgcolor		: '#000000',
	layers		: {
		1: [2,2],
		0: [4,4]
	}
};

var tiles_config = {
	stem		: '/tiles/built/bg_ab/',
	center		: [0.9, 0.6],
	bgcolor		: '#414318',
	layers		: {
		1: [2,2],
		0: [4,4]
	}
};

var Xtiles_config = {
	stem		: '/tiles/built/bg_sota/',
	center		: [2.2, 1.1],
	bgcolor		: '#052431',
	layers		: {
		1: [2,4],
		0: [4,8]
	}
};

var Xtiles_config = {
	stem		: '/tiles/built/bg_ioc/',
	center		: [1.2, 1.2],
	bgcolor		: '#1E395D',
	layers		: {
		1: [4,3],
		0: [8,6]
	}
};

var Xtiles_config = {
	stem		: '/tiles/built/bg_bfg/',
	center		: [1.2, 1.2],
	bgcolor		: '#000C18',
	layers		: {
		1: [2,2],
		0: [4,4]
	}
};

var Xtiles_config = {
	stem		: '/tiles/built/bg_tp/',
	center		: [1.2, 1.2],
	bgcolor		: '#8E8175',
	layers		: {
		1: [2,2],
		0: [4,4]
	}
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


//
// the class for our map layer
//

var num_layers = 0;
for (var i in tiles_config.layers) num_layers++;

var WoWMapOptions = {

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



var map;
    
function initialize() {
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
}

