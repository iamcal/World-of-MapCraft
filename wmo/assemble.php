<?
	include('../build/config.php');

	#assemble_set('inst_rfc', array(
	#	array('LavaDungeon.png', 0, 0),
	#));

	#assemble_set('inst_wc', array(
	#	array('wailingcaverns_instance.png', 0, 0),
	#));

	#assemble_set('inst_sm', array(
	#	array('Monestary_Cathedral.png', 563, 12),
	#	array('Monestary_Cemetery.png', 0, 622),
	#	array('Monestary_War.png', 1200, 0),
	#	array('Monestary_Library.png', 1200, 1233),
	#), 'white');

	#assemble_set('inst_bfd', array(
	#	array('Blackfathom_instance.png', 0, 0),
	#));

	#assemble_set('inst_stocks', array(
	#	array('StormwindJail.png', 0, 0),
	#));

	#assemble_set('inst_gnomer', array(
	#	array('KZ_Gnomeragon_Instance.png', 0, 0),
	#));

	#assemble_set('inst_rfk', array(
	#	array('RazorfenKraul_instance.png', 0, 0),
	#));

	#assemble_set('inst_rfd', array(
	#	array('RazorfenDowns_instance.png', 0, 0),
	#));

	#assemble_set('inst_mara', array(
	#	array('KL_Maraudon_instance01.png', 0, 0),
	#));

	#assemble_set('inst_ulda', array(
	#	array('KZ_Uldaman_A.png', 727, 359),
	#	array('KZ_Uldaman_B.png', 0, 0),
	#));

	#assemble_set('inst_dm', array(
	#	array('KL_Diremaul_Instance.png', 0, 0),
	#));

	#assemble_set('inst_strat', array(
	#	array('Stratholme.png', 0, 0),
	#));

	#assemble_set('raid_naxx', array(
	#	array('Stratholme_raid.png', 0, 0),
	#	array('FrostWyrm_Final01.png', 2200, 250),
	#));

	#assemble_set('raid_mc', array(
	#	array('Blackrock_lower_guild.png', 0, 0),
	#));

	#assemble_set('inst_brd', array(
	#	array('Blackrock_lower_instance.png', 0, 0),
	#));

	#assemble_set('inst_st', array(
	#	array('AZ_SunkenTemple_Instance.png', 300, 0),
	#	array('AZ_SunkenTemple_Instance_lower.png', 0, 400),
	#));

	#assemble_set('raid_ony', array(
	#	array('KL_OnyxiasLair_B.png', 0, 0),
	#));

	#assemble_set('raid_aq40', array(
	#	array('Ahn_Qiraj.png', 0, 0),
	#	array('Ahn_Qiraj__cthun.png', 100, 930),
	#));

	#assemble_set('inst_sp', array(
	#	array('Coilfang_Draenei.png', 0, 0),
	#));

	#assemble_set('inst_ub', array(
	#	array('Coilfang_Marsh.png', 0, 0),
	#));

	#assemble_set('inst_sv', array(
	#	array('Coilfang_Pumping.png', 0, 0),
	#));

	assemble_set('raid_ssc', array(
		array('Coilfang_Raid.png', 0, 0),
	));

	function assemble_set($name, $tiles, $bg_color='black'){

		global $flats, $built;

		echo "$name : ";

		# get canvas size
		$max_w = 0;
		$max_h = 0;
		foreach ($tiles as $tile){
			list($w, $h) = getimagesize("$flats/$tile[0]");
			$max_w = max($max_w, $tile[1]+$w);
			$max_h = max($max_h, $tile[2]+$h);
		}
		$w = ceil($max_w / 256) * 256;
		$h = ceil($max_h / 256) * 256;

		# create canvas
		$temp = "$flats/temp.png";
		$cmd = "convert xc:{$bg_color} -geometry !{$w}x{$h} $temp";
		echo shell_exec($cmd);
		foreach ($tiles as $tile){
			$cmd = "composite $flats/$tile[0] -geometry +{$tile[1]}+{$tile[2]} $temp $temp";
			echo shell_exec($cmd);
		}

#return;
		# cut out z0 pieces

		$w /= 256;
		$h /= 256;

		shell_exec("rm -rf $built/$name");
		mkdir("$built/$name");

		for ($x=0; $x<$w; $x++){
		for ($y=0; $y<$h; $y++){

			$xp = $x * 256;
			$yp = $y * 256;

			$out = "$built/$name/tile_z0_".sprintf('%02d_%02d', $x, $y).'.png';
			$cmd = "convert $temp -crop 256x256+$xp+$yp +repage $out";

			echo shell_exec($cmd);
			echo '.';
		}
		}

		echo "done!\n";
	}
