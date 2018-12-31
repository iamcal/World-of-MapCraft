var sv_mode = false;
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
		streetViewControl: true,

		mapTypeId: 'WoWmap'
	};
	map = new google.maps.Map(document.getElementById("map"), mapOptions);

	// Now attach the coordinate map type to the map's registry
	map.mapTypes.set('WoWmap', WoWMapType);
  
	// We can now set the map to use the 'coordinate' map type
	map.setMapTypeId('WoWmap');




	// pano stuffs

	var nexus = new google.maps.LatLng(0.43359375, 1.1197509765625);

	var panoramaOptions = {
		pano: 'test1',
		panoProvider: getCustomPanorama,
		pov: {
			heading: 34,
			pitch: 10,
			zoom: 1
		},
		enableCloseButton: true
	};
	panorama = new google.maps.StreetViewPanorama(document.getElementById("pano") ,panoramaOptions);
	//map.setStreetView(panorama);

	google.maps.event.addListener(panorama, 'pano_changed', function(){
		console.log('pano_changed', panorama.getPano());
	});

	google.maps.event.addListener(panorama, 'position_changed', function(){
		console.log('position_changed', panorama.getPosition());
	});

	google.maps.event.addListener(panorama, 'visible_changed', function(){
		console.log('visible_changed', panorama.getVisible());
		set_sv_mode(!!panorama.getVisible());
	});

var n = new google.maps.Marker({
	map: map,
	position: PixelsToLatLng([768,1088]),
});





rect_at_px(map, 16896, 11216, 17744, 11776); // 1519, Stormwind City
rect_at_px(map, 15872, 11520, 17616, 12960); // 40, Westfall
rect_at_px(map, 18096, 5888,  19200, 7008 ); // 28, Western Plaguelands
rect_at_px(map, 18976, 5632,  20800, 6800 ); // 139, Eastern Plaguelands

	// deal with hash stuff
	hash_init();
	google.maps.event.addListener(map, 'dragend', hash_update);
	google.maps.event.addListener(map, 'zoom_changed', hash_update);
}

function rect_at_px(map, x_min, y_min, x_max, y_max){

	var ne = PixelsToLatLng([x_max/4, y_min/4]);
	var sw = PixelsToLatLng([x_min/4, y_max/4]);
	var rect = new google.maps.Rectangle({
		strokeColor: "#FF0000",
		strokeOpacity: 0.8,
		strokeWeight: 2,
		fillColor: "#FF0000",
		fillOpacity: 0.35,
		map: map,
		bounds: new google.maps.LatLngBounds(sw,ne)
	});
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
	$("li a.current").parents("li").children('a').addClass("current");
});




function wow_pano_provider(pano, zoom, tileX, tileY){


}

function getCustomPanoramaTileUrl(panoID, zoom, tileX, tileY){

	return "http://googlemaps.googlermania.com/google_maps_api_v3/en/custom_streetview/ardenwood_tiles/entrance_gate/"  + tileX + '-' +tileY + '_s1.jpg';
}

function getCustomPanorama(panoID){

	if (panoID == 'test1'){
		return {
			links: [],
			copyright: null,
			tiles: {
				tileSize: new google.maps.Size(256, 256),
				worldSize: new google.maps.Size(2048, 1024),
				centerHeading: 0,
				getTileUrl: getCustomPanoramaTileUrl
			},
			location: {
				pano: 'test1',
				description: 'test 1 desc',
				latLng: new google.maps.LatLng(0.43359375, 1.1197509765625)
			}
		};
	}

	console.log('failed to find pano', panoID);

	return null;
}
