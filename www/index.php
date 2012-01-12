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
		'_'			=> array($base.'/azeroth/', 1.3, 0.9, '#001D29', array(3,2, 6,4, 12,8, 24,16, 48,32, 96,64)),
		'outland'		=> array($base.'/outland/', 0.7, 0.7, '#000000', array(2,2, 4,4, 8,8, 16,16, 32,32)),
		'vashjir'		=> array($base.'/vashjir/', 0.7, 0.7, '#575357', array(2,2, 4,4, 8,8, 10,10)),
		'deepholm'		=> array($base.'/deepholm/', 0.7, 0.7, '#2E2D36', array(2,2, 4,4, 8,8)),

		'warsong-gulch'		=> array($base.'/bg_wsg/', 0.7, 0.9, '#F7F3F7', array(2,2, 4,4)),
		'arathi-basin'		=> array($base.'/bg_ab/', 1.1, 1, '#414318', array(2,2, 4,4)),
		'alterac-valley'	=> array($base.'/bg_av/', 0.75, 1.25, '#8FB0C9', array(2,3, 4,6)),
		'eye-of-the-storm'	=> array($base.'/bg_eots/', 0.5, 1, '#000000', array(2,2, 4,4)),
		'strand-of-the-ancients'=> array($base.'/bg_sota/', 1.1, 2.2, '#052431', array(2,4, 4,8)),
		'isle-of-conquest'	=> array($base.'/bg_ioc/', 1.2, 1.2, '#1E395D', array(4,3, 8,6)),
		'battle-for-gilneas'	=> array($base.'/bg_bfg/', 1, 0.9, '#000C18', array(2,2, 4,4)),
		'twin-peaks'		=> array($base.'/bg_tp/', 0.8, 0.8, '#8E8175', array(2,2, 4,4)),

		# dungeons

		'ragefire-chasm'	=> array('http://doats.net/tiles/built/inst_rfc/', 0.7, 1, '#000000', array(2,3, 4,5)),
		'deadmines'		=> array('http://doats.net/tiles/built/inst_vc/', 0.9, 1.05, '#000000', array(3,3, 5,5)),
		'wailing-caverns'	=> array('http://doats.net/tiles/built/inst_wc/', 0.85, 0.6, '#000000', array(3,2, 6,4, 9,5)),
		'shadowfang-keep'	=> array('http://doats.net/tiles/built/inst_sfk/', 1.4, 0.7, '#000000', array(3,2)),
		'blackfathom-deeps'	=> array('http://doats.net/tiles/built/inst_bfd/', 0.9, 0.8, '#000000', array(2,2, 4,4, 8,7)),
		'stockade'		=> array('http://doats.net/tiles/built/inst_stocks/', 1.15, 0.8, '#000000', array(3,3)),
		'gnomeregan'		=> array('http://doats.net/tiles/built/inst_gnomer/', 0.85, 0.7, '#000000', array(2,2, 4,4, 8,7)),
		'scarlet-monastery'	=> array('http://doats.net/tiles/built/inst_sm/', 0.95, 0.8, '#ffffff', array(2,2, 4,4, 8,7)),
		'razorfen-kraul'	=> array('http://doats.net/tiles/built/inst_rfk/', 1.1, 1.25, '#000000', array(3,3, 5,5)),
		'maraudon'		=> array('http://doats.net/tiles/built/inst_mara/', 1.05, 1.3, '#000000', array(3,3, 6,6, 10,11)),
		'uldaman'		=> array('http://doats.net/tiles/built/inst_ulda/', 1.3, 1.1, '#000000', array(3,3, 6,5)),
		'dire-maul'		=> array('http://doats.net/tiles/built/inst_dm/', 0.9, 0.6, '#000000', array(2,2, 4,4, 8,8, 15,11)),
		'scholomance'		=> array('http://doats.net/tiles/built/inst_scholo/', 0.7, 0.37, '#000000', array(2,1, 4,2, 7,4)),
		'razorfen-downs'	=> array('http://doats.net/tiles/built/inst_rfd/', 1.55, 0.8, '#000000', array(3,2, 6,4)),
		'stratholme'		=> array('http://doats.net/tiles/built/inst_strat/', 0.85, 0.75, '#000000', array(2,2, 4,4, 8,7)),
		'zul-farrak'		=> array('http://doats.net/tiles/built/inst_zf/', 0.55, 0.7, '#D0C1B5', array(2,2, 4,4)),
		'blackrock-depths'	=> array('http://doats.net/tiles/built/inst_brd/', 1.1, 1.2, '#000000', array(3,3, 6,6, 10,11)),
		'sunken-temple'		=> array('http://doats.net/tiles/built/inst_st/', 1.2, 1.1, '#000000', array(3,3, 5,5)),
		'lower-blackrock-spire'	=> array('http://doats.net/tiles/built/inst_lbrs/', 1.3, 0.6, '#000000', array(3,2, 6,3)),
		'upper-blackrock-spire'	=> array('http://doats.net/tiles/built/inst_ubrs/', 1.05, 0.5, '#000000', array(3,2, 5,3)),

		'hellfire-ramparts'	=> array(),
		'blood-furnace'		=> array('http://doats.net/tiles/built/inst_bf/', 0.8, 1.1, '#000000', array(3,3, 5,5)),
		'shattered-halls'	=> array('http://doats.net/tiles/built/inst_sh/', 0.9, 1.2, '#000000', array(3,3, 5,5)),
		'slave-pens'		=> array('http://doats.net/tiles/built/inst_sp/', 0.8, 0.5, '#000000', array(2,2, 4,4, 8,5)),
		'underbog'		=> array('http://doats.net/tiles/built/inst_ub/', 0.7, 0.6, '#000000', array(2,2, 4,4, 7,5)),
		'steamvault'		=> array('http://doats.net/tiles/built/inst_sv/', 1.2, 1.1, '#000000', array(3,3, 6,5)),
		'mana-tombs'		=> array('http://doats.net/tiles/built/inst_mt/', 0.65, 0.9, '#000000', array(2,3, 4,5)),
		'auchenai-crypts'	=> array('http://doats.net/tiles/built/inst_ac/', 0.9, 0.9, '#000000', array(3,3, 5,5)),
		'sethekk-halls'		=> array('http://doats.net/tiles/built/inst_seth/', 0.85, 0.95, '#000000', array(2,2, 4,4)),
		'shadow-labyrinth'	=> array('http://doats.net/tiles/built/inst_slabs/', 1.2, 1.1, '#000000', array(3,3, 6,6)),
		'durnholde-keep'	=> array($base.'/inst_hillsbrad/', 0.75, 0.75, '#F7F3F7', array(2,2, 4,4, 8,8)),
		'black-morass'		=> array('http://doats.net/tiles/built/inst_bm/', 1.65, 1.5, '#453B25', array(3,3)),
		'mechanar'		=> array('http://doats.net/tiles/built/inst_mech/', 0.8, 0.9, '#000000', array(2,2, 4,4)),
		'botanica'		=> array('http://doats.net/tiles/built/inst_bot/', 0.7, 0.5, '#000000', array(2,2, 4,4, 7,5)),
		'arcatraz'		=> array('http://doats.net/tiles/built/inst_arc/', 1.1, 1.15, '#000000', array(3,3, 6,6)),
		'magisters-terrace'	=> array(),

		'utgarde-keep'		=> array(),
		'nexus'			=> array(),
		'old-kingdom'		=> array(),
		'azjol-nerub'		=> array(),
		'drak-tharon-keep'	=> array(),
		'violet-hold'		=> array('http://doats.net/tiles/built/inst_vh/', 0.9, 0.7, '#000000', array(2,2)),
		'gundrak'		=> array('http://doats.net/tiles/built/inst_gun/', 0.9, 1.0, '#000000', array(3,3, 5,5)),
		'halls-of-stone'	=> array('http://doats.net/tiles/built/inst_hos/', 0.9, 0.8, '#000000', array(2,2, 4,4, 8,7)),
		'halls-of-lightning'	=> array('http://doats.net/tiles/built/inst_hol/', 0.8, 0.5, '#000000', array(2,2, 4,4, 7,5)),
		'oculus'		=> array(),
		'culling-of-stratholme'	=> array(),
		'utgarde-pinnacle'	=> array('http://doats.net/tiles/built/inst_up/', 0.7, 0.8, '#000000', array(3,2, 5,4)),
		'trial-of-the-champion'	=> array(),
		'forge-of-souls'	=> array('http://doats.net/tiles/built/inst_fos/', 0.8, 0.5, '#000000', array(2,2, 4,4, 7,5)),
		'pit-of-saron'		=> array('http://doats.net/tiles/built/inst_pos/', 1.45, 1.52, '#151A21', array(3,3)),
		'halls-of-reflection'	=> array('http://doats.net/tiles/built/inst_hor/', 0.9, 0.8, '#000000', array(2,2, 4,4, 7,8)),

		'throne-of-the-tides'	=> array(),
		'blackrock-caverns'	=> array('http://doats.net/tiles/built/inst_brc/', 0.95, 0.65, '#000000', array(2,2, 4,4, 8,7)),
		'stonecore'		=> array('http://doats.net/tiles/built/inst_sc/', 0.95, 0.8, '#000000', array(3,2, 6,4, 9,8)),
		'vortex-pinnacle'	=> array('http://doats.net/tiles/built/inst_vp/', 0.9, 0.7, '#310000', array(2,2, 4,3)),
		'lost-city'		=> array('http://doats.net/tiles/built/inst_lc/', 1.5, 1.5, '#ffffff', array(3,3)),
		'halls-of-origination'	=> array(),
		'grim-batol'		=> array('http://doats.net/tiles/built/inst_gb/', 0.8, 0.75, '#000000', array(2,2, 4,4, 7,7)),
		'zul-aman'		=> array('http://doats.net/tiles/built/inst_za/', 1.0, 0.8, '#2D2A21', array(2,2)),
		'zul-gurub'		=> array('http://doats.net/tiles/built/inst_zg/', 1.05, 1.3, '#ffffff', array(3,3)),
		'end-time'		=> array('http://doats.net/tiles/built/inst_et/', 1.5, 1.25, '#443C3C', array(3,3, 6,5)),
		'well-of-eternity'	=> array('http://doats.net/tiles/built/inst_woe/', 1.0, 0.75, '#634929', array(2,2, 4,3)),
		'hour-of-twilight'	=> array('http://doats.net/tiles/built/inst_hot/', 0.75, 1.0, '#E4F0F4', array(2,2, 3,4)),


		# raids

		'molten-core'		=> array('http://doats.net/tiles/built/raid_mc/', 0.95, 0.8, '#000000', array(2,2, 4,4, 8,8)),
		'blackwing-lair'	=> array(),
		'aq-ruins'		=> array('http://doats.net/tiles/built/inst_aq20/', 0.85, 1.3, '#655339', array(2,3, 4,5)),
		'aq-temple'		=> array('http://doats.net/tiles/built/raid_aq40/', 0.85, 0.6, '#000000', array(2,2, 4,4, 8,8, 15,11)),

		'karazhan'		=> array(),
		'gruul'			=> array('http://doats.net/tiles/built/raid_gruul/', 0.9, 0.65, '#000000', array(3,2, 5,3)),
		'magtheridon'		=> array('http://doats.net/tiles/built/raid_mag/', 0.4, 0.7, '#000000', array(2,2, 3,4)),
		'serpentshrine-cavern'	=> array('http://doats.net/tiles/built/raid_ssc/', 1.2, 0.9, '#000000', array(3,3, 6,6, 11,9)),
		'the-eye'		=> array('http://doats.net/tiles/built/raid_tk/', 0.98, 1.2, '#000000', array(2,3, 4,6, 8,9)),
		'mount-hyjal'		=> array($base.'/inst_bmh/', 0.75, 0.65, '#F7F3F7', array(2,2, 4,4, 8,8)),
		'black-temple'		=> array(),
		'sunwell'		=> array(),

		'naxxramas'		=> array('http://doats.net/tiles/built/raid_naxx/', 0.7, 0.55, '#000000', array(2,2, 4,4, 8,8, 13,10)),
		'obsidian-sanctum'	=> array('http://doats.net/tiles/built/raid_os/', 1.0, 0.95, '#1E1C1E', array(2,2)),
		'vault-of-archavon'	=> array('http://doats.net/tiles/built/raid_voa/', 0.5, 0.8, '#000000', array(2,2, 4,4, 5,7)),
		'eye-of-eternity'	=> array(),
		'ulduar'		=> array(),
		'trial-of-the-crusader'	=> array(),
		'onyxia'		=> array('http://doats.net/tiles/built/raid_ony/', 1.4, 1.1, '#000000', array(4,3)),
		'ruby-sanctum'		=> array('http://doats.net/tiles/built/raid_rs/', 1.0, 1.0, '#392E39', array(2,2)),
		'icecrown-citadel'	=> array(),

		'baradin-hold'		=> array('http://doats.net/tiles/built/raid_bh/', 1.15, 0.8, '#000000', array(3,2, 6,4)),
		'bastion-of-twilight'	=> array('http://doats.net/tiles/built/raid_bot/', 0.4, 0.8, '#000000', array(1,2, 2,4, 4,8, 8,13)),
		'throne-of-four-winds'	=> array('http://doats.net/tiles/built/raid_tofw/', 1.45, 1.1, '#310000', array(3,3)),
		'blackwing-descent'	=> array('http://doats.net/tiles/built/raid_bwd/', 0.8, 0.9, '#000000', array(2,3, 4,6, 8,9)),
		'firelands'		=> array(),
		'dragon-soul'		=> array(),
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
			<li><?=nav_link('warsong-gulch', 'Warsong Gulch')?></li>
			<li><?=nav_link('arathi-basin', 'Arathi Basin')?></li>
			<li><?=nav_link('alterac-valley', 'Alterac Valley')?></li>
			<li><?=nav_link('eye-of-the-storm', 'Eye of the Storm')?></li>
			<li><?=nav_link('strand-of-the-ancients', 'Strand of the Ancients')?></li>
			<li><?=nav_link('isle-of-conquest', 'Isle of Conquest')?></li>
			<li><?=nav_link('battle-for-gilneas', 'Battle for Gilneas')?></li>
			<li><?=nav_link('twin-peaks', 'Twin Peaks')?></li>
		</ul>
	</li>
	<li><a href="#" onclick="return false;">Dungeons</a>
		<ul>
			<li><a href="#" onclick="return false;">Classic</a>
				<ul>
					<li><?=nav_link('ragefire-chasm', "Ragefire Chasm")?></li>
					<li><?=nav_link('deadmines', "Deadmines")?></li>
					<li><?=nav_link('wailing-caverns', "Wailing Caverns")?></li>
					<li><?=nav_link('shadowfang-keep', "Shadowfang Keep")?></li>
					<li><?=nav_link('blackfathom-deeps', "Blackfathom Deeps")?></li>
					<li><?=nav_link('stockade', "The Stockade")?></li>
					<li><?=nav_link('gnomeregan', "Gnomeregan")?></li>
					<li><?=nav_link('scarlet-monastery', "Scarlet Monastery")?></li>
					<li><?=nav_link('razorfen-kraul', "Razorfen Kraul")?></li>
					<li><?=nav_link('maraudon', "Maraudon")?></li>
					<li><?=nav_link('uldaman', "Uldaman")?></li>
					<li><?=nav_link('dire-maul', "Dire Maul")?></li>
					<li><?=nav_link('scholomance', "Scholomance")?></li>
					<li><?=nav_link('razorfen-downs', "Razorfen Downs")?></li>
					<li><?=nav_link('stratholme', "Stratholme")?></li>
					<li><?=nav_link('zul-farrak', "Zul'Farrak")?></li>
					<li><?=nav_link('blackrock-depths', "Blackrock Depths")?></li>
					<li><?=nav_link('sunken-temple', "Temple of Atal'Hakkar")?></li>
					<li><?=nav_link('lower-blackrock-spire', "Lower Blackrock Spire")?></li>
					<li><?=nav_link('upper-blackrock-spire', "Upper Blackrock Spire")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">The Burning Crusade</a>
				<ul>
					<li><?=dead_link("Hellfire Ramparts")?></li>
					<li><?=nav_link('blood-furnace', "The Blood Furnace")?></li>
					<li><?=nav_link('shattered-halls', "Shattered Halls")?></li>
					<li><?=nav_link('slave-pens', "Slave Pens")?></li>
					<li><?=nav_link('underbog', "The Underbog")?></li>
					<li><?=nav_link('steamvault', "The Steamvault")?></li>
					<li><?=nav_link('mana-tombs', "Mana-Tombs")?></li>
					<li><?=nav_link('auchenai-crypts', "Auchenai Crypts")?></li>
					<li><?=nav_link('sethekk-halls', "Sethekk Halls")?></li>
					<li><?=nav_link('shadow-labyrinth', "Shadow Labyrinth")?></li>
					<li><?=nav_link('durnholde-keep', "Durnholde Keep")?></li>
					<li><?=nav_link('black-morass', "Black Morass")?></li>
					<li><?=nav_link('mechanar', "The Mechanar")?></li>
					<li><?=nav_link('botanica', "The Botanica")?></li>
					<li><?=nav_link('arcatraz', "The Arcatraz")?></li>
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
					<li><?=nav_link('violet-hold', "The Violet Hold")?></li>
					<li><?=nav_link('gundrak', "Gundrak")?></li>
					<li><?=nav_link('halls-of-stone', "Halls of Stone")?></li>
					<li><?=nav_link('halls-of-lightning', "Halls of Lightning")?></li>
					<li><?=dead_link("The Oculus")?></li>
					<li><?=dead_link("Culling of Stratholme")?></li>
					<li><?=nav_link('utgarde-pinnacle', "Utgarde Pinnacle")?></li>
					<li><?=dead_link("Trial of the Champion")?></li>
					<li><?=nav_link('forge-of-souls', "Forge of Souls")?></li>
					<li><?=nav_link('pit-of-saron', "Pit of Saron")?></li>
					<li><?=nav_link('halls-of-reflection', "Halls of Reflection")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Cataclysm</a>
				<ul>
					<li><?=dead_link("Throne of the Tides")?></li>
					<li><?=nav_link('blackrock-caverns', "Blackrock Caverns")?></li>
					<li><?=nav_link('stonecore', "The Stonecore")?></li>
					<li><?=nav_link('vortex-pinnacle', "Vortex Pinnacle")?></li>
					<li><?=nav_link('lost-city', "Lost City of the Tol'vir")?></li>
					<li><?=dead_link("Halls of Origination")?></li>
					<li><?=nav_link('grim-batol', "Grim Batol")?></li>
					<li><?=nav_link('zul-aman', "Zul'Aman")?></li>
					<li><?=nav_link('zul-gurub', "Zul'Gurub")?></li>
					<li><?=nav_link('end-time', "End Time")?></li>
					<li><?=nav_link('well-of-eternity', "Well of Eternity")?></li>
					<li><?=nav_link('hour-of-twilight', "Hour of Twilight")?></li>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="#" onclick="return false;">Raids</a>
		<ul>
			<li><a href="#" onclick="return false;">Classic</a>
				<ul>
					<li><?=nav_link('molten-core', "Molten Core")?></li>
					<li><?=dead_link("Blackwing Lair")?></li>
					<li><?=nav_link('aq-ruins', "Ruins of Ahn'Qiraj")?></li>
					<li><?=nav_link('aq-temple', "Temple of Ahn'Qiraj")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">The Burning Crusade</a>
				<ul>
					<li><?=dead_link("Karazhan")?></li>
					<li><?=nav_link('gruul', "Gruul's Lair")?></li>
					<li><?=nav_link('magtheridon', "Magtheridon's Lair")?></li>
					<li><?=nav_link('serpentshrine-cavern', "Serpentshrine Cavern")?></li>
					<li><?=nav_link('the-eye', "The Eye")?></li>
					<li><?=nav_link('mount-hyjal', "Battle for Mount Hyjal")?></li>
					<li><?=dead_link("Black Temple")?></li>
					<li><?=dead_link("Sunwell Plateau")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Wrath of the Lich King</a>
				<ul>
					<li><?=nav_link('naxxramas', "Naxxramas")?></li>
					<li><?=nav_link('obsidian-sanctum', "Obsidian Sanctum")?></li>
					<li><?=nav_link('vault-of-archavon', "Vault of Archavon")?></li>
					<li><?=dead_link("The Eye of Eternity")?></li>
					<li><?=dead_link("Ulduar")?></li>
					<li><?=dead_link("Trial of the Crusader")?></li>
					<li><?=nav_link('onyxia', "Onyxia's Lair")?></li>
					<li><?=nav_link('ruby-sanctum', "Ruby Sanctum")?></li>
					<li><?=dead_link("Icecrown Citadel")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Cataclysm</a>
				<ul>
					<li><?=nav_link('baradin-hold', "Baradin Hold")?></li>
					<li><?=nav_link('bastion-of-twilight', "Bastion of Twilight")?></li>
					<li><?=nav_link('throne-of-four-winds', "Throne of the Four Winds")?></li>
					<li><?=nav_link('blackwing-descent', "Blackwing Descent")?></li>
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
