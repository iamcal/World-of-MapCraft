<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

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


	# map config

	$hash = array(
		'_'		=> array($base.'/azeroth/', 1.3, 0.9, '#001D29', array(3,2, 6,4, 12,8, 24,16, 48,32, 96,64)),
		'outland'	=> array($base.'/outland/', 0.7, 0.7, '#000000', array(2,2, 4,4, 8,8, 16,16, 32,32)),
		'vashjir'	=> array($base.'/vashjir/', 0.7, 0.7, '#575357', array(2,2, 4,4, 8,8, 10,10)),
		'deepholm'	=> array($base.'/deepholm/', 0.7, 0.7, '#2E2D36', array(2,2, 4,4, 8,8)),

		'eots'		=> array($base.'/bg_eots/', 0.5, 1, '#000000', array(2,2, 4,4)),
		'ab'		=> array($base.'/bg_ab/', 1.1, 1, '#414318', array(2,2, 4,4)),
		'sota'		=> array($base.'/bg_sota/', 1.1, 2.2, '#052431', array(2,4, 4,8)),
		'ioc'		=> array($base.'/bg_ioc/', 1.2, 1.2, '#1E395D', array(4,3, 8,6)),
		'bfg'		=> array($base.'/bg_bfg/', 1, 0.9, '#000C18', array(2,2, 4,4)),
		'tp'		=> array($base.'/bg_tp/', 0.8, 0.8, '#8E8175', array(2,2, 4,4)),
		'wsg'		=> array($base.'/bg_wsg/', 0.7, 0.9, '#F7F3F7', array(2,2, 4,4)),
		'av'		=> array($base.'/bg_av/', 0.75, 1.25, '#8FB0C9', array(2,3, 4,6)),

		'bmh'		=> array($base.'/inst_bmh/', 0.75, 0.65, '#F7F3F7', array(2,2, 4,4, 8,8)),

		'durnholde'	=> array($base.'/inst_hillsbrad/', 0.75, 0.75, '#F7F3F7', array(2,2, 4,4, 8,8)),
		'zf'		=> array('http://doats.net/tiles/built/inst_zf/', 0.55, 0.7, '#D0C1B5', array(2,2, 4,4)),
		'strat'		=> array('http://doats.net/tiles/built/inst_strat/', 0.7, 0.7, 'white', array(2,2, 3,3)),
	);


	function format_pairs($p){
		$num =( count($p)/2)-1;
		$bits = array();
		for ($i=$num; $i>=0; $i--){
			$a = ($num-$i)*2;
			$b = $a+1;
			$bits[] = "$i: [$p[$a],$p[$b]]";
		}
		return implode(', ', $bits);
	}


	$map = $_GET['m'];

	if (!$hash[$map]) $map = '_';
	$data = $hash[$map];
?>

var tiles_config = {
	stem		: '<?=$data[0]?>',
	center		: [<?=$data[2]?>, <?=$data[1]?>],
	bgcolor		: '<?=$data[3]?>',
	layers		: { <?=format_pairs($data[4])?> }
};

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

<a href="/"><img src="/img/mapcraft.gif" width="70" height="35" /></a>

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
	function dead_link($v){
		return "<a href=\"#\" onclick=\"return false;\" class=\"pending\">$v</a>";
	}
?>
<ul id="nav" xclass="topnav">
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
	<li><a href="#" onclick="return false;">Dungeons</a>
		<ul>
			<li><a href="#" onclick="return false;">Classic</a>
				<ul>
					<li><?=dead_link("Ragefire Chasm")?></li>
					<li><?=dead_link("Deadmines")?></li>
					<li><?=dead_link("Wailing Caverns")?></li>
					<li><?=dead_link("Shadowfang Keep")?></li>
					<li><?=dead_link("Blackfathom Deeps")?></li>
					<li><?=dead_link("The Stockade")?></li>
					<li><?=dead_link("Gnomeregan")?></li>
					<li><?=dead_link("Scarlet Monastery")?></li>
					<li><?=dead_link("Razorfen Kraul")?></li>
					<li><?=dead_link("Maraudon")?></li>
					<li><?=dead_link("Uldaman")?></li>
					<li><?=dead_link("Dire Maul")?></li>
					<li><?=dead_link("Scholomance")?></li>
					<li><?=dead_link("Razorfen Downs")?></li>
					<li><?=nav_link('strat', "Stratholme")?></li>
					<li><?=nav_link('zf', "Zul'Farrak")?></li>
					<li><?=dead_link("Blackrock Depths")?></li>
					<li><?=dead_link("Temple of Atal'Hakkar")?></li>
					<li><?=dead_link("Lower Blackrock Spire")?></li>
					<li><?=dead_link("Upper Blackrock Spire")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">The Burning Crusade</a>
				<ul>
					<li><?=dead_link("Hellfire Ramparts")?></li>
					<li><?=dead_link("The Blood Furnace")?></li>
					<li><?=dead_link("Shattered Halls")?></li>
					<li><?=dead_link("Slave Pens")?></li>
					<li><?=dead_link("The Underbog")?></li>
					<li><?=dead_link("The Steamvault")?></li>
					<li><?=dead_link("Mana-Tombs")?></li>
					<li><?=dead_link("Auchenai Crypts")?></li>
					<li><?=dead_link("Sethekk Halls")?></li>
					<li><?=dead_link("Shadow Labyrinth")?></li>
					<li><?=nav_link('durnholde', "Durnholde Keep")?></li>
					<li><?=dead_link("Black Morass")?></li>
					<li><?=dead_link("The Mechanar")?></li>
					<li><?=dead_link("The Botanica")?></li>
					<li><?=dead_link("The Arcatraz")?></li>
					<li><?=dead_link("Magisters' Terrace")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Wrath of the Lich King</a>
				<ul>
					<li><?=dead_link("Utgarde Keep")?></li>
					<li><?=dead_link("The Nexus")?></li>
					<li><?=dead_link("Ahn'kahet: The Old Kingdom")?></li>
					<li><?=dead_link("Azjol-Nerub")?></li>
					<li><?=dead_link("Drak'Tharon Keep")?></li>
					<li><?=dead_link("The Violet Hold")?></li>
					<li><?=dead_link("Gundrak")?></li>
					<li><?=dead_link("Halls of Stone")?></li>
					<li><?=dead_link("Halls of Lightning")?></li>
					<li><?=dead_link("The Oculus")?></li>
					<li><?=dead_link("Culling of Stratholme")?></li>
					<li><?=dead_link("Utgarde Pinnacle")?></li>
					<li><?=dead_link("Trial of the Champion")?></li>
					<li><?=dead_link("Forge of Souls")?></li>
					<li><?=dead_link("Pit of Saron")?></li>
					<li><?=dead_link("Halls of Reflection")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Cataclysm</a>
				<ul>
					<li><?=dead_link("Throne of the Tides")?></li>
					<li><?=dead_link("Blackrock Caverns")?></li>
					<li><?=dead_link("The Stonecore")?></li>
					<li><?=dead_link("Vortex Pinnacle")?></li>
					<li><?=dead_link("Lost City of the Tol'vir")?></li>
					<li><?=dead_link("Halls of Origination")?></li>
					<li><?=dead_link("Grim Batol")?></li>
					<li><?=dead_link("Zul'Aman")?></li>
					<li><?=dead_link("Zul'Gurub")?></li>
					<li><?=dead_link("End Time")?></li>
					<li><?=dead_link("Well of Eternity")?></li>
					<li><?=dead_link("Hour of Twilight")?></li>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="#" onclick="return false;">Raids</a>
		<ul>
			<li><a href="#" onclick="return false;">Classic</a>
				<ul>
					<li><?=dead_link("Molten Core")?></li>
					<li><?=dead_link("Blackwing Lair")?></li>
					<li><?=dead_link("Ruins of Ahn'Qiraj")?></li>
					<li><?=dead_link("Temple of Ahn'Qiraj")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">The Burning Crusade</a>
				<ul>
					<li><?=dead_link("Karazhan")?></li>
					<li><?=dead_link("Gruul's Lair")?></li>
					<li><?=dead_link("Magtheridon's Lair")?></li>
					<li><?=dead_link("Serpentshrine Cavern")?></li>
					<li><?=dead_link("The Eye")?></li>
					<li><?=nav_link('bmh', "Battle for Mount Hyjal")?></li>
					<li><?=dead_link("Black Temple")?></li>
					<li><?=dead_link("Sunwell Plateau")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Wrath of the Lich King</a>
				<ul>
					<li><?=dead_link("Naxxramas")?></li>
					<li><?=dead_link("Obsidian Sanctum")?></li>
					<li><?=dead_link("Vault of Archavon")?></li>
					<li><?=dead_link("The Eye of Eternity")?></li>
					<li><?=dead_link("Ulduar")?></li>
					<li><?=dead_link("Trial of the Crusader")?></li>
					<li><?=dead_link("Onyxia's Lair")?></li>
					<li><?=dead_link("Ruby Sanctum")?></li>
					<li><?=dead_link("Icecrown Citadel")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Cataclysm</a>
				<ul>
					<li><?=dead_link("Baradin Hold")?></li>
					<li><?=dead_link("Bastion of Twilight")?></li>
					<li><?=dead_link("Throne of the Four Winds")?></li>
					<li><?=dead_link("Blackwing Descent")?></li>
					<li><?=dead_link("Firelands")?></li>
					<li><?=dead_link("Dragon Soul")?></li>
				</ul>
			</li>
		</ul>
	</li>
</ul>

</div>

</body>
</html>
