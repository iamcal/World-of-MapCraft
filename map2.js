var map_config = {
	path		: '/tiles/pngs2/',
	fileExt		: 'png',
	tileSize	: 256,
	defaultZoom	: 0,
	maxZoom		: 4,
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


//
// the class for our map layer
//

//Zoom map
//0 -> 4
//1 -> 3
//2 -> 2
//3 -> 1

var WoWMapOptions = {

	getTileUrl: function(tile, zoom) {


		//if (x < 0 || y < 0) return null;
		//if ((zoom == 3) && (tile.x > 15 || tile.y > 12)) return null;
		//if ((zoom == 2) && (tile.x > 7 || tile.y > 6)) return null;
		//if ((zoom == 1) && (tile.x > 3 || tile.y > 3)) return null;
		//if ((zoom == 0) && (tile.x > 1 || tile.y > 1)) return null;

		var z = 1 + (4 - zoom);

		var tx = ""+tile.x;
		var ty = ""+tile.y;
		while (tx.length < 2) tx = "0"+tx;
		while (ty.length < 2) ty = "0"+ty;

		var url = '/tiles/built/azeroth/tile_z'+z+'_'+tx+'_'+ty+'.png';
		console.log(tile, url);
		return url;
		return url;
	},
	tileSize: new google.maps.Size(map_config.tileSize, map_config.tileSize),
	maxZoom:  map_config.maxZoom,
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
		backgroundColor: '#001D29',
		zoom: map_config.defaultZoom,
		center2: PixelsToLatLng(256, 25),
		center: new google.maps.LatLng(0, 0),
		navigationControl: true,
		navigationControlOptions: { style: google.maps.NavigationControlStyle.SMALL }, // still no way to get rid of the dude
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

