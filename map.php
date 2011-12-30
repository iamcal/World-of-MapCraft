<html>
<head>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="map2.js"></script>
<script type="text/javascript">
<?
$map = $_GET['m'];
switch ($map){
case 'outland':
?>

var tiles_config = {
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

<? break; case 'deepholm': ?>

var tiles_config = {
	stem		: '/tiles/built/deepholm/',
	center		: [0.7, 0.7],
	bgcolor		: '#2E2D36',
	layers		: {
		2: [2,2],
		1: [4,4],
		0: [8,8]
	}
};

<? break; case 'eots': ?>

var tiles_config = {
	stem		: '/tiles/built/bg_eots/',
	center		: [1, 0.5],
	bgcolor		: '#000000',
	layers		: {
		1: [2,2],
		0: [4,4]
	}
};

<? break; case 'ab': ?>

var tiles_config = {
	stem		: '/tiles/built/bg_ab/',
	center		: [1, 1.1],
	bgcolor		: '#414318',
	layers		: {
		1: [2,2],
		0: [4,4]
	}
};

<? break; case 'sota': ?>

var tiles_config = {
	stem		: '/tiles/built/bg_sota/',
	center		: [2.2, 1.1],
	bgcolor		: '#052431',
	layers		: {
		1: [2,4],
		0: [4,8]
	}
};

<? break; case 'ioc': ?>

var tiles_config = {
	stem		: '/tiles/built/bg_ioc/',
	center		: [1.2, 1.2],
	bgcolor		: '#1E395D',
	layers		: {
		1: [4,3],
		0: [8,6]
	}
};

<? break; case 'bfg': ?>

var tiles_config = {
	stem		: '/tiles/built/bg_bfg/',
	center		: [0.9, 1],
	bgcolor		: '#000C18',
	layers		: {
		1: [2,2],
		0: [4,4]
	}
};

<? break; case 'tp': ?>

var tiles_config = {
	stem		: '/tiles/built/bg_tp/',
	center		: [0.8, 0.8],
	bgcolor		: '#8E8175',
	layers		: {
		1: [2,2],
		0: [4,4]
	}
};

<? break; default: $map = '_'; ?>

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
		0: [96,64]
	}
};

<?
}
?>

$(function(){
	initialize();
	$(window).resize(function(){
		$('#map').css('width', $(window).width()+'px');
		$('#map').css('height', ($(window).height()-20)+'px');
		google.maps.event.trigger(map, 'resize');
	}).resize();
});

</script>
<style>
body { padding: 0; margin: 0 }
</style>
</head>
<body>

<div>
<?
	$nav = array(
		'_'		=> 'Azeroth',
		'outland'	=> 'Outland',
		'deepholm'	=> 'Deepholm',
		'ab'		=> 'AB',
		'eots'		=> 'EotS',
		'sota'		=> 'SotA',
		'ioc'		=> 'IoC',
		'bfg'		=> 'BfG',
		'tp'		=> 'TP',
	);
	foreach ($nav as $k => $v){
		if ($k == $map){
			echo "<b>$v</b>\n";
		}else{
			$url = $k == '_' ? 'map.php' : 'map.php?m='.$k;
			echo "<a href=\"$url\">$v</a>\n";
		}
	}
?>
</div>

<div id="map" style="position: absolute; top: 20px; left: 0px; width: 400px; height: 400px"></div>

</body>
</html>
