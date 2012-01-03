<html>
<head>
<title>World of MapCraft</title>
<link rel="stylesheet" type="text/css" media="all" href="/style.css" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="/map.js"></script>
<script type="text/javascript">
<?
$base = '/tiles/built';
$base = 'http://iamcal-misc.s3.amazonaws.com/wow-tiles';
$base = 'http://cdn.iamcal.com/wow-tiles';


$map = $_GET['m'];
switch ($map){
case 'outland':
?>

var tiles_config = {
	stem		: '<?=$base?>/outland/',
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

<? break; case 'vashjir': ?>

var tiles_config = {
	stem		: '<?=$base?>/vashjir/',
	center		: [0.7, 0.7],
	bgcolor		: '#575357',
	layers		: {
		3: [2,2],
		2: [4,4],
		1: [8,8],
		0: [10,10]
	}
};

<? break; case 'deepholm': ?>

var tiles_config = {
	stem		: '<?=$base?>/deepholm/',
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
	stem		: '<?=$base?>/bg_eots/',
	center		: [1, 0.5],
	bgcolor		: '#000000',
	layers		: {
		1: [2,2],
		0: [4,4]
	}
};

<? break; case 'ab': ?>

var tiles_config = {
	stem		: '<?=$base?>/bg_ab/',
	center		: [1, 1.1],
	bgcolor		: '#414318',
	layers		: {
		1: [2,2],
		0: [4,4]
	}
};

<? break; case 'sota': ?>

var tiles_config = {
	stem		: '<?=$base?>/bg_sota/',
	center		: [2.2, 1.1],
	bgcolor		: '#052431',
	layers		: {
		1: [2,4],
		0: [4,8]
	}
};

<? break; case 'ioc': ?>

var tiles_config = {
	stem		: '<?=$base?>/bg_ioc/',
	center		: [1.2, 1.2],
	bgcolor		: '#1E395D',
	layers		: {
		1: [4,3],
		0: [8,6]
	}
};

<? break; case 'bfg': ?>

var tiles_config = {
	stem		: '<?=$base?>/bg_bfg/',
	center		: [0.9, 1],
	bgcolor		: '#000C18',
	layers		: {
		1: [2,2],
		0: [4,4]
	}
};

<? break; case 'tp': ?>

var tiles_config = {
	stem		: '<?=$base?>/bg_tp/',
	center		: [0.8, 0.8],
	bgcolor		: '#8E8175',
	layers		: {
		1: [2,2],
		0: [4,4]
	}
};

<? break; case 'wsg': ?>

var tiles_config = {
	stem		: '<?=$base?>/bg_wsg/',
	center		: [0.9, 0.7],
	bgcolor		: '#F7F3F7',
	layers		: {
		1: [2,2],
		0: [4,4]
	}
};

<? break; case 'av': ?>

var tiles_config = {
	stem		: '<?=$base?>/bg_av/',
	center		: [1.25, 0.75],
	bgcolor		: '#8FB0C9',
	layers		: {
		1: [2,3],
		0: [4,6]
	}
};

<? break; case 'bmh': ?>

var tiles_config = {
	stem		: '<?=$base?>/inst_bmh/',
	center		: [0.65, 0.75],
	bgcolor		: '#F7F3F7',
	layers		: {
		2: [2,2],
		1: [4,4],
		0: [8,8]
	}
};

<? break; case 'hillsbrad': ?>

var tiles_config = {
	stem		: '<?=$base?>/inst_hillsbrad/',
	center		: [0.75, 0.75],
	bgcolor		: '#F7F3F7',
	layers		: {
		2: [2,2],
		1: [4,4],
		0: [8,8]
	}
};


<? break; default: $map = '_'; ?>

var tiles_config = {
	stem		: '<?=$base?>/azeroth/',
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
		$('#map').css('height', ($(window).height()-35)+'px');
		google.maps.event.trigger(map, 'resize');
		hash_init(); // keeps the map centered correctly
	}).resize();
});

</script>
<style>
body { padding: 0; margin: 0 }
</style>
</head>
<body>

<div id="map" style="position: absolute; top: 35px; left: 0px; width: 400px; height: 400px"></div>

<div class="topnav">
<div class="source"><a href="https://github.com/iamcal/World-of-MapCraft">Source code</a></div>

<img src="/img/mapcraft.gif" width="70" height="35" />

<ul class="topnav">
<?
	function nav_link($k, $v){
		global $map;
		$url = $k == '_' ? '/' : "/$k/";
		if ($k == $map){
			return "<a href=\"$url\" class=\"current\">$v</a>";
		}else{
			return "<a href=\"$url\">$v</a>";
		}
	}
?>
<ul class="topnav">
	<li><?=nav_link('_', 'Azeroth')?></li>
	<li><?=nav_link('outland', 'Outland')?></li>
	<li><?=nav_link('vashjir', 'Vash\'jir')?></li>
	<li><?=nav_link('deepholm', 'Deepholm')?></li>
	<li><a href="#" onclick="return false;">Battlegrounds</a>
		<ul class="subnav">
			<li><?=nav_link('wsg', 'Warsong Gulch')?></li>
			<li><?=nav_link('ab', 'Arathi Basin')?></li>
			<li><?=nav_link('av', 'Alterac Valley')?></li>
			<li><?=nav_link('eots', 'Eye of the Storm')?></li>
			<li><?=nav_link('sota', 'Strand of the Ancients')?></li>
			<li><?=nav_link('ioc', 'Isle of Conquest')?></li>
			<li><?=nav_link('bfg', 'Battle for Gilneas')?></li>
			<li><?=nav_link('tp', 'Twin Peaks')?></li>
		</ul>
	</li>
	<li><a href="#" onclick="return false;">Instances</a>
		<ul class="subnav">
			<li><?=nav_link('bmh', 'Hyjal Past')?></li>
			<li><?=nav_link('hillsbrad', 'Hillsbrad Past')?></li>
		</ul>
	</li>
</ul>

</div>

</body>
</html>
