<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>World of MapCraft</title>
<link rel="stylesheet" type="text/css" media="all" href="/style.css" />
<script type="text/javascript" src="https://maps.google.com/maps/api/js?v=3&key=AIzaSyBAlZlTdi6viC3o3yH2JXTqMKRGAWCURxY"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="/map.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-25SXS0KSWM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-25SXS0KSWM');
</script>
<script type="text/javascript">
<?
$base = 'http://doats.net/tiles/built';
$base = 'http://doats.net/tiles/crushed';
#$base = 'http://iamcal-misc.s3.amazonaws.com/wow-tiles';
#$base = 'https://cdn.iamcal.com/wow-tiles';
$base = 'https://cdn.iamcal.com/mapcraft/v2';
$base_mop = 'https://cdn.iamcal.com/mapcraft/mopv1';


	# map config

	$hash = array(
		'_'			=> array($base_mop.'/azeroth/', 1.3, 1.1, '#001D29', array(3,3, 6,6, 12,12, 24,24, 48,48, 85,69)),
		'outland'		=> array($base.'/outland/', 0.7, 0.7, '#000000', array(2,2, 4,4, 8,8, 16,16, 22,22)),
		'vashjir'		=> array($base.'/vashjir/', 0.7, 0.7, '#575357', array(2,2, 4,4, 8,8, 10,9)),
		'deepholm'		=> array($base.'/deepholm/', 0.7, 0.7, '#2E2D36', array(2,2, 4,4, 6,6)),

		'warsong-gulch'		=> array($base.'/bg_wsg/', 0.7, 0.9, '#F7F3F7', array(2,2, 3,3)),
		'arathi-basin'		=> array($base.'/bg_ab/', 1.1, 1, '#414318', array(2,2, 4,4)),
		'alterac-valley'	=> array($base.'/bg_av/', 0.75, 1.25, '#8FB0C9', array(2,3, 3,5)),
		'eye-of-the-storm'	=> array($base.'/bg_eots/', 0.5, 1, '#000000', array(2,2, 3,4)),
		'strand-of-the-ancients'=> array($base.'/bg_sota/', 1.1, 2.2, '#052431', array(2,4, 4,7)),
		'isle-of-conquest'	=> array($base.'/bg_ioc/', 0.6, 0.6, '#1E395D', array(2,2, 4,4, 7,6)),
		'battle-for-gilneas'	=> array($base.'/bg_bfg/', 1, 0.9, '#000C18', array(2,2, 4,3)),
		'twin-peaks'		=> array($base.'/bg_tp/', 0.8, 0.8, '#8E8175', array(2,2, 3,3)),

		# dungeons

		'ragefire-chasm'	=> array($base.'/inst_rfc/', 0.7, 1, '#000000', array(2,3, 4,5)),
		'deadmines'		=> array($base.'/inst_vc/', 0.9, 1.05, '#000000', array(3,3, 5,5)),
		'wailing-caverns'	=> array($base.'/inst_wc/', 0.85, 0.6, '#000000', array(3,2, 6,4, 9,5)),
		'shadowfang-keep'	=> array($base.'/inst_sfk/', 1.4, 0.7, '#000000', array(3,2)),
		'blackfathom-deeps'	=> array($base.'/inst_bfd/', 0.9, 0.8, '#000000', array(2,2, 4,4, 8,7)),
		'stockade'		=> array($base.'/inst_stocks/', 1.15, 0.8, '#000000', array(3,3)),
		'gnomeregan'		=> array($base.'/inst_gnomer/', 0.85, 0.7, '#000000', array(2,2, 4,4, 8,7)),
		'scarlet-monastery'	=> array($base.'/inst_sm/', 0.95, 0.8, '#ffffff', array(2,2, 4,4, 8,7)),
		'razorfen-kraul'	=> array($base.'/inst_rfk/', 1.1, 1.25, '#000000', array(3,3, 5,5)),
		'maraudon'		=> array($base.'/inst_mara/', 1.33, 1.36, '#000000', array(3,3, 6,6, 12,12)),
		'uldaman'		=> array($base.'/inst_ulda/', 1.3, 1.1, '#000000', array(3,3, 6,5)),
		'dire-maul'		=> array($base.'/inst_dm/', 0.9, 0.6, '#000000', array(2,2, 4,4, 8,8, 15,11)),
		'scholomance'		=> array($base.'/inst_scholo/', 0.7, 0.37, '#000000', array(2,1, 4,2, 7,4)),
		'razorfen-downs'	=> array($base.'/inst_rfd/', 1.55, 0.8, '#000000', array(3,2, 6,4)),
		'stratholme'		=> array($base.'/inst_strat/', 0.85, 0.75, '#000000', array(2,2, 4,4, 8,7)),
		'zul-farrak'		=> array($base.'/inst_zf/', 1.15, 1.54, '#D0C1B5', array(3,3)),
		'blackrock-depths'	=> array($base.'/inst_brd/', 1.1, 1.2, '#000000', array(3,3, 6,6, 10,11)),
		'sunken-temple'		=> array($base.'/inst_st/', 1.2, 1.1, '#000000', array(3,3, 5,5)),
		'lower-blackrock-spire'	=> array($base.'/inst_lbrs/', 1.3, 0.6, '#000000', array(3,2, 6,3)),
		'upper-blackrock-spire'	=> array($base.'/inst_ubrs/', 1.05, 0.5, '#000000', array(3,2, 5,3)),

		'hellfire-ramparts'	=> array($base.'/inst_ramps/', 0.65, 0.35, '#AD5942', array(2,1, 4,2, 7,4)),
		'blood-furnace'		=> array($base.'/inst_bf/', 0.8, 1.1, '#000000', array(3,3, 5,5)),
		'shattered-halls'	=> array($base.'/inst_sh/', 0.9, 1.2, '#000000', array(3,3, 5,5)),
		'slave-pens'		=> array($base.'/inst_sp/', 0.8, 0.5, '#000000', array(2,2, 4,4, 8,5)),
		'underbog'		=> array($base.'/inst_ub/', 0.7, 0.6, '#000000', array(2,2, 4,4, 7,5)),
		'steamvault'		=> array($base.'/inst_sv/', 1.2, 1.1, '#000000', array(3,3, 6,5)),
		'mana-tombs'		=> array($base.'/inst_mt/', 0.65, 0.9, '#000000', array(2,3, 4,5)),
		'auchenai-crypts'	=> array($base.'/inst_ac/', 0.9, 0.9, '#000000', array(3,3, 5,5)),
		'sethekk-halls'		=> array($base.'/inst_seth/', 0.85, 0.95, '#000000', array(2,2, 4,4)),
		'shadow-labyrinth'	=> array($base.'/inst_slabs/', 1.2, 1.1, '#000000', array(3,3, 6,6)),
		'durnholde-keep'	=> array($base.'/inst_hillsbrad/', 0.75, 0.75, '#F7F3F7', array(2,2, 4,4, 6,6)),
		'black-morass'		=> array($base.'/inst_bm/', 1.65, 1.5, '#453B25', array(3,3)),
		'mechanar'		=> array($base.'/inst_mech/', 0.8, 0.9, '#000000', array(2,2, 4,4)),
		'botanica'		=> array($base.'/inst_bot/', 0.7, 0.5, '#000000', array(2,2, 4,4, 7,5)),
		'arcatraz'		=> array($base.'/inst_arc/', 1.1, 1.15, '#000000', array(3,3, 6,6)),
		'magisters-terrace'	=> array($base.'/inst_mgt/', 0.72, 0.3, '#335254', array(2,1, 4,2, 7,3)),

		'utgarde-keep'		=> array($base.'/inst_uk/', 0.6, 0.7, '#000000', array(2,2, 4,4, 5,7)),
		'nexus'			=> array($base.'/inst_nexus/', 0.8, 0.7, '#000000', array(2,2, 4,4, 8,6)),
		'old-kingdom'		=> array($base.'/inst_ok/', 1.6, 1.0, '#424542', array(3,2)),
		'azjol-nerub'		=> array($base.'/inst_an/', 1.15, 0.45, '#000000', array(3,2, 6,4, 10,5)),
		'drak-tharon-keep'	=> array($base.'/inst_dtk/', 1.25, 0.75, '#000000', array(3,2, 6,4)),
		'violet-hold'		=> array($base.'/inst_vh/', 0.9, 0.7, '#000000', array(2,2)),
		'gundrak'		=> array($base.'/inst_gun/', 0.9, 1.0, '#000000', array(3,3, 5,5)),
		'halls-of-stone'	=> array($base.'/inst_hos/', 0.9, 0.8, '#000000', array(2,2, 4,4, 8,7)),
		'halls-of-lightning'	=> array($base.'/inst_hol/', 0.8, 0.5, '#000000', array(2,2, 4,4, 7,5)),
		'oculus'		=> array($base.'/inst_oculus/', 1.0, 1.0, '#163454', array(2,2, 4,4)),
		'culling-of-stratholme'	=> array($base.'/inst_cos/', 0.6, 0.8, '#000000', array(2,2, 4,4, 6,7)),
		'utgarde-pinnacle'	=> array($base.'/inst_up/', 0.7, 0.8, '#000000', array(3,2, 5,4)),
		'trial-of-the-champion'	=> array($base.'/inst_toc/', 0.55, 0.48, '#000000', array(2,1)),
		'forge-of-souls'	=> array($base.'/inst_fos/', 0.8, 0.5, '#000000', array(2,2, 4,4, 7,5)),
		'pit-of-saron'		=> array($base.'/inst_pos/', 1.45, 1.52, '#151A21', array(3,3)),
		'halls-of-reflection'	=> array($base.'/inst_hor/', 0.9, 0.8, '#000000', array(2,2, 4,4, 7,8)),

		'throne-of-the-tides'	=> array($base.'/inst_tot/', 0.6, 1.18, '#310000', array(2,3, 4,6, 5,11)),
		'blackrock-caverns'	=> array($base.'/inst_brc/', 0.95, 0.65, '#000000', array(2,2, 4,4, 8,7)),
		'stonecore'		=> array($base.'/inst_sc/', 0.95, 0.8, '#000000', array(3,2, 6,4, 9,8)),
		'vortex-pinnacle'	=> array($base.'/inst_vp/', 0.9, 0.7, '#310000', array(2,2, 4,3)),
		'lost-city'		=> array($base.'/inst_lc/', 1.5, 1.5, '#ffffff', array(3,3)),
		'halls-of-origination'	=> array($base.'/inst_hoo/', 1.3, 1.4, '#000000', array(3,3, 6,6, 11,12)),
		'grim-batol'		=> array($base.'/inst_gb/', 0.8, 0.75, '#000000', array(2,2, 4,4, 7,7)),
		'zul-aman'		=> array($base.'/inst_za/', 1.0, 0.8, '#2D2A21', array(2,2)),
		'zul-gurub'		=> array($base.'/inst_zg/', 1.05, 1.3, '#ffffff', array(3,3)),
		'end-time'		=> array($base.'/inst_et/', 1.5, 1.25, '#443C3C', array(3,3, 6,5)),
		'well-of-eternity'	=> array($base.'/inst_woe/', 1.0, 0.75, '#634929', array(2,2, 4,3)),
		'hour-of-twilight'	=> array($base.'/inst_hot/', 0.75, 1.0, '#E4F0F4', array(2,2, 3,4)),


		# raids

		'molten-core'		=> array($base.'/raid_mc/', 0.95, 0.8, '#000000', array(2,2, 4,4, 8,8)),
		'blackwing-lair'	=> array($base.'/raid_bwl/', 0.75, 0.38, '#000000', array(2,1, 4,2, 7,4)),
		'aq-ruins'		=> array($base.'/inst_aq20/', 0.85, 1.3, '#655339', array(2,3, 4,5)),
		'aq-temple'		=> array($base.'/raid_aq40/', 0.85, 0.6, '#000000', array(2,2, 4,4, 8,8, 15,11)),

		'karazhan'		=> array($base.'/raid_kara/', 0.63, 0.43, '#000000', array(2,1, 4,2, 8,4, 13,8)),
		'gruul'			=> array($base.'/raid_gruul/', 0.9, 0.65, '#000000', array(3,2, 5,3)),
		'magtheridon'		=> array($base.'/raid_mag/', 0.4, 0.7, '#000000', array(2,2, 3,4)),
		'serpentshrine-cavern'	=> array($base.'/raid_ssc/', 1.2, 0.9, '#000000', array(3,3, 6,6, 11,9)),
		'the-eye'		=> array($base.'/raid_tk/', 0.98, 1.2, '#000000', array(2,3, 4,6, 8,9)),
		'mount-hyjal'		=> array($base.'/inst_bmh/', 0.75, 0.65, '#F7F3F7', array(2,2, 4,4, 6,5)),
		'black-temple'		=> array($base.'/raid_bt/', 0.8, 0.85, '#000000', array(2,2, 4,4, 8,8, 13,15)),
		'sunwell'		=> array($base.'/raid_sunwell/', 1.0, 0.7, '#001D29', array(2,3, 4,6, 8,9)),

		'naxxramas'		=> array($base.'/raid_naxx/', 0.7, 0.55, '#000000', array(2,2, 4,4, 8,8, 13,10)),
		'obsidian-sanctum'	=> array($base.'/raid_os/', 1.0, 0.95, '#1E1C1E', array(2,2)),
		'vault-of-archavon'	=> array($base.'/raid_voa/', 0.5, 0.8, '#000000', array(2,2, 4,4, 5,7)),
		'eye-of-eternity'	=> array($base.'/raid_eoe/', 0.55, 0.57, '#000000', array(1,1)),
		'ulduar'		=> array($base.'/raid_ulduar/', 1.15, 1.05, '#000000', array(3,3, 6,6, 12,12, 18,17)),
		'trial-of-the-crusader'	=> array($base.'/raid_toc/', 0.55, 0.85, '#000000', array(2,2, 4,4, 5,8)),
		'onyxia'		=> array($base.'/raid_ony/', 0.65, 0.55, '#000000', array(2,2, 4,3)),
		'ruby-sanctum'		=> array($base.'/raid_rs/', 1.0, 1.0, '#392E39', array(2,2)),
		'icecrown-citadel'	=> array($base.'/raid_icc/', 1.2, 0.8, '#000000', array(3,2, 6,4, 10,7)),

		'baradin-hold'		=> array($base.'/raid_bh/', 1.15, 0.8, '#000000', array(3,2, 6,4)),
		'bastion-of-twilight'	=> array($base.'/raid_bot/', 0.4, 0.8, '#000000', array(1,2, 2,4, 4,8, 8,13)),
		'throne-of-four-winds'	=> array($base.'/raid_tofw/', 1.45, 1.1, '#310000', array(3,3)),
		'blackwing-descent'	=> array($base.'/raid_bwd/', 0.8, 0.9, '#000000', array(2,3, 4,6, 8,9)),
		'firelands'		=> array($base.'/raid_fl/', 1.0, 0.71, '#310000', array(3,2, 6,4, 9,8)),
		'dragon-soul'		=> array($base.'/raid_ds/', 0.8, 0.7, '#000000', array(2,2, 4,4, 7,6)),


		# world misc

		'undercity'		=> array($base.'/misc_undercity/', 1.5, 1.55, '#000000', array(3,3, 6,6)),
		'ironforge'		=> array($base.'/misc_if/', 1.22, 1.25, '#000000', array(3,3, 6,6)),
		'exodar'		=> array($base.'/misc_exodar/', 0.7, 0.6, '#000000', array(2,2, 4,4, 7,6)),
		'subway'		=> array($base.'/misc_subway/', 1.25, 0.2, '#000000', array(3,1, 6,2, 12,4, 21,5)),
		'caverns-of-time'	=> array($base.'/misc_cot/', 1.3, 0.8, '#000000', array(3,2, 6,4, 11,7)),
		'dalaran'		=> array($base.'/misc_dal/', 1.2, 1.6, '#000000', array(3,3, 5,6)),
		'darkmoon-faire'	=> array($base.'/misc_dmf/', 1.1, 1.27, '#1E395D', array(2,3, 4,5)),
		'firelands-dailies'	=> array($base.'/misc_fl/', 1.12, 0.9, '#310000', array(2,2, 4,4, 8,6)),

		'cata_azeroth'		=> array($base.'/azeroth/', 1.3, 0.9, '#001D29', array(3,2, 6,4, 12,8, 24,16, 48,32, 85,60)),
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
		$v = str_replace(array_keys($GLOBALS['logo_map']), $GLOBALS['logo_map'], $v);
		$url = $k == '_' ? '/' : "/$k/";
		if ($k == $map){
			return "<a href=\"$url\" class=\"current\">$v</a>";
		}else{
			return "<a href=\"$url\">$v</a>";
		}
	}
	function dead_link($v){
		$v = str_replace(array_keys($GLOBALS['logo_map']), $GLOBALS['logo_map'], $v);
		return "<a href=\"#\" onclick=\"return false;\" class=\"pending\">$v</a>";
	}

	$logo_map = array(
	#	'{BC}'		=> '<img src="/img/bc.gif" width="30" height="14" style="float: none" />',
	#	'{Wrath}'	=> '<img src="/img/wrath.png" width="36" height="19" style="float: none" />',
	#	'{Cata}'	=> '<img src="/img/cata.png" width="39" height="15" style="float: none" />',
	#	'{MoP}'		=> '<img src="/img/mop.png" width="46" height="14" style="float: none" />',
		'{BC}'		=> '',
		'{Wrath}'	=> '',
		'{Cata}'	=> '',
		'{MoP}'		=> '',
	);
?>
<ul id="nav" xclass="topnav">
	<li><?=nav_link('_', 'Azeroth')?></li>
	<li><?=nav_link('outland', 'Outland')?></li>
	<li><?=nav_link('vashjir', 'Vash\'jir')?></li>
	<li><?=nav_link('deepholm', 'Deepholm')?></li>
	<li><a href="#" onclick="return false;">PvP</a>
		<ul>
			<li><a href="#" onclick="return false;">Battlegrounds</a>
				<ul>
					<li><?=nav_link('warsong-gulch', 'Warsong Gulch')?></li>
					<li><?=nav_link('arathi-basin', 'Arathi Basin')?></li>
					<li><?=nav_link('alterac-valley', 'Alterac Valley')?></li>
					<li><?=nav_link('eye-of-the-storm', 'Eye of the Storm {BC}')?></li>
					<li><?=nav_link('strand-of-the-ancients', 'Strand of the Ancients {Wrath}')?></li>
					<li><?=nav_link('isle-of-conquest', 'Isle of Conquest {Wrath}')?></li>
					<li><?=nav_link('battle-for-gilneas', 'Battle for Gilneas {Cata}')?></li>
					<li><?=nav_link('twin-peaks', 'Twin Peaks {Cata}')?></li>
					<li><?=dead_link("Silver Shard Mine {MoP}")?></li>
					<li><?=dead_link("Temple of Kotmogu {MoP}")?></li>
					<li><?=dead_link("Unnamed CTF {MoP}")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Arenas</a>
				<ul>
					<li><?=dead_link("The Ring of Valor {BC}")?></li>
					<li><?=dead_link("The Ruins of Lordaeron {BC}")?></li>
					<li><?=dead_link("The Ring of Trials {BC}")?></li>
					<li><?=dead_link("The Circle of Blood {BC}")?></li>
					<li><?=dead_link("The Dalaran Arena {Wrath}")?></li>
					<li><?=dead_link("Tol'vir Proving Grounds {MoP}")?></li>
				</ul>
			</li>
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
					<li><?=nav_link('hellfire-ramparts', "Hellfire Ramparts")?></li>
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
					<li><?=nav_link('magisters-terrace', "Magisters' Terrace")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Wrath of the Lich King</a>
				<ul>
					<li><?=nav_link('utgarde-keep', "Utgarde Keep")?></li>
					<li><?=nav_link('nexus', "The Nexus")?></li>
					<li><?=nav_link('old-kingdom', "Ahn'kahet: The Old Kingdom")?></li>
					<li><?=nav_link('azjol-nerub', "Azjol-Nerub")?></li>
					<li><?=nav_link('drak-tharon-keep', "Drak'Tharon Keep")?></li>
					<li><?=nav_link('violet-hold', "The Violet Hold")?></li>
					<li><?=nav_link('gundrak', "Gundrak")?></li>
					<li><?=nav_link('halls-of-stone', "Halls of Stone")?></li>
					<li><?=nav_link('halls-of-lightning', "Halls of Lightning")?></li>
					<li><?=nav_link('oculus', "The Oculus")?></li>
					<li><?=nav_link('culling-of-stratholme', "Culling of Stratholme")?></li>
					<li><?=nav_link('utgarde-pinnacle', "Utgarde Pinnacle")?></li>
					<li><?=nav_link('trial-of-the-champion', "Trial of the Champion")?></li>
					<li><?=nav_link('forge-of-souls', "Forge of Souls")?></li>
					<li><?=nav_link('pit-of-saron', "Pit of Saron")?></li>
					<li><?=nav_link('halls-of-reflection', "Halls of Reflection")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Cataclysm</a>
				<ul>
					<li><?=nav_link('throne-of-the-tides', "Throne of the Tides")?></li>
					<li><?=nav_link('blackrock-caverns', "Blackrock Caverns")?></li>
					<li><?=nav_link('stonecore', "The Stonecore")?></li>
					<li><?=nav_link('vortex-pinnacle', "Vortex Pinnacle")?></li>
					<li><?=nav_link('lost-city', "Lost City of the Tol'vir")?></li>
					<li><?=nav_link('halls-of-origination', "Halls of Origination")?></li>
					<li><?=nav_link('grim-batol', "Grim Batol")?></li>
					<li><?=nav_link('zul-aman', "Zul'Aman")?></li>
					<li><?=nav_link('zul-gurub', "Zul'Gurub")?></li>
					<li><?=nav_link('end-time', "End Time")?></li>
					<li><?=nav_link('well-of-eternity', "Well of Eternity")?></li>
					<li><?=nav_link('hour-of-twilight', "Hour of Twilight")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Mists of Pandaria</a>
				<ul>
					<li><?=dead_link("Temple of the Jade Serpent")?></li>
					<li><?=dead_link("Stormstout Brewery")?></li>
					<li><?=dead_link("Shado-pan Monastery")?></li>
					<li><?=dead_link("Gate of the Setting Sun")?></li>
					<li><?=dead_link("Mogu'Shan Palace")?></li>
					<li><?=dead_link("The Perfect Storm")?></li>
					<li><?=dead_link("Crypt of Forgotten Kings")?></li>
					<li><?=dead_link("Temple of the Red Crane")?></li>
					<li><?=dead_link("Temple of the White Tiger")?></li>
					<li><?=dead_link("Scholomance (90)")?></li>
					<li><?=dead_link("Scarlet Cathedral")?></li>
					<li><?=dead_link("Scarlet Halls")?></li>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="#" onclick="return false;">Raids</a>
		<ul>
			<li><a href="#" onclick="return false;">Classic</a>
				<ul>
					<li><?=nav_link('molten-core', "Molten Core")?></li>
					<li><?=nav_link('blackwing-lair', "Blackwing Lair")?></li>
					<li><?=nav_link('aq-ruins', "Ruins of Ahn'Qiraj")?></li>
					<li><?=nav_link('aq-temple', "Temple of Ahn'Qiraj")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">The Burning Crusade</a>
				<ul>
					<li><?=nav_link('karazhan', "Karazhan")?></li>
					<li><?=nav_link('gruul', "Gruul's Lair")?></li>
					<li><?=nav_link('magtheridon', "Magtheridon's Lair")?></li>
					<li><?=nav_link('serpentshrine-cavern', "Serpentshrine Cavern")?></li>
					<li><?=nav_link('the-eye', "The Eye")?></li>
					<li><?=nav_link('mount-hyjal', "Battle for Mount Hyjal")?></li>
					<li><?=nav_link('black-temple', "Black Temple")?></li>
					<li><?=nav_link('sunwell', "Sunwell Plateau")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Wrath of the Lich King</a>
				<ul>
					<li><?=nav_link('naxxramas', "Naxxramas")?></li>
					<li><?=nav_link('obsidian-sanctum', "Obsidian Sanctum")?></li>
					<li><?=nav_link('vault-of-archavon', "Vault of Archavon")?></li>
					<li><?=nav_link('eye-of-eternity', "The Eye of Eternity")?></li>
					<li><?=nav_link('ulduar', "Ulduar")?></li>
					<li><?=nav_link('trial-of-the-crusader', "Trial of the Crusader")?></li>
					<li><?=nav_link('onyxia', "Onyxia's Lair")?></li>
					<li><?=nav_link('ruby-sanctum', "Ruby Sanctum")?></li>
					<li><?=nav_link('icecrown-citadel', "Icecrown Citadel")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Cataclysm</a>
				<ul>
					<li><?=nav_link('baradin-hold', "Baradin Hold")?></li>
					<li><?=nav_link('bastion-of-twilight', "Bastion of Twilight")?></li>
					<li><?=nav_link('throne-of-four-winds', "Throne of the Four Winds")?></li>
					<li><?=nav_link('blackwing-descent', "Blackwing Descent")?></li>
					<li><?=nav_link('firelands', "Firelands")?></li>
					<li><?=nav_link('dragon-soul', "Dragon Soul")?></li>
				</ul>
			</li>
			<li><a href="#" onclick="return false;">Mists of Pandaria</a>
				<ul>
					<li><?=dead_link("Mogu'shan Vaults")?></li>
					<li><?=dead_link("Heart of Fear")?></li>
					<li><?=dead_link("Terrace of Endless Spring")?></li>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="#" onclick="return false;">Misc</a>
		<ul class="subnav">
			<li><?=nav_link('undercity', 'Undercity')?></li>
			<li><?=nav_link('ironforge', 'Ironforge')?></li>
			<li><?=nav_link('exodar', 'The Exodar')?></li>
			<li><?=nav_link('subway', 'SW / IF Subway')?></li>
			<li><?=nav_link('caverns-of-time', 'Caverns of Time')?></li>
			<li><?=nav_link('dalaran', 'Dalaran')?></li>
			<li><?=nav_link('darkmoon-faire', 'Darkmoon Faire Isle')?></li>
			<li><?=nav_link('firelands-dailies', 'Firelands Dailies')?></li>
			<li><?=dead_link("The Wandering Isle")?></li>
		</ul>
	</li>
</ul>

</div>

</body>
</html>
