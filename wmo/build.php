<?
	include('../build/config.php');


	#build_wmo_map('Dungeon/KL_OrgrimmarLavaDungeon', 'LavaDungeon');

	#build_wmo_map('Dungeon/AZ_Deadmines', 'AZ_Deadmines_A');
	#build_wmo_map('Dungeon/AZ_Deadmines', 'AZ_Deadmines_B');
	#build_wmo_map('Dungeon/AZ_Deadmines', 'AZ_Deadmines_C');
	#build_wmo_map('Dungeon/AZ_Deadmines', 'AZ_Deadmines_D');

	#build_wmo_map('Dungeon/AZ_StormwindPrisons', 'StormwindPrison');
	#build_wmo_map('Dungeon/AZ_StormwindPrisons', 'StormwindJail');
	#build_wmo_map('Dungeon/AZ_Subway', 'Subway');

	#build_wmo_map('Dungeon/KL_Wailing', 'wailingcaverns');
	#build_wmo_map('Dungeon/KL_Wailing', 'wailingcaverns_instance');

	#build_wmo_map('Dungeon/KL_Blackfathom', 'Blackfathom');
	#build_wmo_map('Dungeon/KL_Blackfathom', 'Blackfathom_instance');

	#build_wmo_map('Dungeon/KZ_Gnomeragon', 'KZ_Gnomeragon_Instance');

	#build_wmo_map('Dungeon/LD_ScarletMonestary' ,'Monestary_Cathedral');
	#build_wmo_map('Dungeon/LD_ScarletMonestary' ,'Monestary_Cemetery');
	#build_wmo_map('Dungeon/LD_ScarletMonestary' ,'Monestary_Library');
	#build_wmo_map('Dungeon/LD_ScarletMonestary' ,'Monestary_War');

	#build_wmo_map('Dungeon/KL_Razorfen', 'RazorfenDowns_instance');
	#build_wmo_map('Dungeon/KL_Razorfen', 'RazorfenKraul_instance');

	#build_wmo_map('Dungeon/KL_Maraudon', 'KL_Maraudon');
	#build_wmo_map('Dungeon/KL_Maraudon', 'KL_Maraudon_instance01');

	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman');
	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman_A');
	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman_B');
	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman_C');
	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman_Unearthed');

	#build_wmo_map('Dungeon/KL_DireMaul', 'KL_Diremaul');
	#build_wmo_map('Dungeon/KL_DireMaul', 'KL_Diremaul_Instance');
	#build_wmo_map('Dungeon/KL_DireMaul', 'KL_Diremaul__BackEnt');

	#build_wmo_map('Dungeon/LD_Stratholme', 'FrostWyrm_Final01');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme_A');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme_B');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme_C');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme_raid');

	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_lower_guild');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_lower_instance');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_instance');

	$st_lower = array(
		101,	# bottom middle
		3,4,5,6,7,8,9,10,11,12,13,14,27, # outer ring
		28,29,30,	# bottom side rooms
		37,38,39,40,41,42,43,44,45,46,47,71, # connecting ring to middle
		116,117,118,119, # stairs up
		66,73,78,83,	# ramps
		104,105, # vertical coridoor
		120,121	# entrance
	);

	#build_wmo_map('Dungeon/SunkenTemple', 'AZ_SunkenTemple');
	#build_wmo_map('Dungeon/SunkenTemple', 'AZ_SunkenTemple_Instance', array(), $st_lower);
	#build_wmo_map('Dungeon/SunkenTemple', 'AZ_SunkenTemple_Instance', $st_lower, array(), 'AZ_SunkenTemple_Instance_lower');

	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFang');
	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFangInterior');


	$cthun = array(1,2,23,24,25,26,30,31,32,34);
	$junk_over = array(
		22,42, # misc facade
		33, # brain?
		44, # random coridoor
	); # 21&37 are needed :(

	#build_wmo_map('Dungeon/KL_AhnQiraj', 'Ahn_Qiraj_facade');
	#build_wmo_map('Dungeon/KL_AhnQiraj', 'Ahn_Qiraj', array(), array_merge($cthun, $junk_over));
	#build_wmo_map('Dungeon/KL_AhnQiraj', 'Ahn_Qiraj', $cthun, array(), 'Ahn_Qiraj__cthun');

	#build_wmo_map('Dungeon/KL_OnyxiasLair', 'KL_OnyxiasLair');
	#build_wmo_map('Dungeon/KL_OnyxiasLair', 'KL_OnyxiasLair_A');
	#build_wmo_map('Dungeon/KL_OnyxiasLair', 'KL_OnyxiasLair_B');

	#build_wmo_map('Dungeon/QT_Sunwell_5Man', 'Sunwell_5Man');
	#build_wmo_map('Dungeon/QT_Sunwell', 'Sunwell');

	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_Draenei');
	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_Marsh');
	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_Pumping');
	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_Raid');
	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_zangarentrance');

	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple_entrance');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple_facade');
	#build_wmo_map('Dungeon/Blacktemple', 'ShadowMoon_BattlementLeft');
	#build_wmo_map('Dungeon/Blacktemple', 'ShadowMoon_BattlementWall01');
	#build_wmo_map('Dungeon/Blacktemple', 'ShadowMoon_Battlementright');
	#build_wmo_map('Dungeon/Blacktemple', 'ShadowMoon_Wall_crack');

	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Arcane');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Atrium');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Exterior');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Exterior_smallwing');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Exterior_smallwing_Arcane');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Exterior_smallwing_Factory');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Factory');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Raid');

	#build_wmo_map('Dungeon/Hellfire', 'Hellfire_Citadel');
	#build_wmo_map('Dungeon/Hellfire', 'Hellfire_Military');
	#build_wmo_map('Dungeon/Hellfire', 'Hellfire_raid');
	#build_wmo_map('Dungeon/Hellfire', 'Hellfire_ramparts');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_DemonWing');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_wall01');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_wall02');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_wall03');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_wall04');

	#build_wmo_map('Dungeon/OL_GronnRaid', 'Gronnraid');
	#build_wmo_map('Dungeon/OL_GronnRaid', 'Gronnraid_facade');

	#build_wmo_map('Dungeon/OL_Auchindoun', 'Auchindoun_Enterance');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'Draenei_wing');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'OL_Crypt');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'demon_wing');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'ethereal_wing');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'shadow_council_wing');

	#build_wmo_map('Dungeon/Azjol_Lowercity', 'Azjol_LowerCityRoof');
	build_wmo_map('Dungeon/Azjol_Lowercity', 'Azjol_Lowercity');
	build_wmo_map('Dungeon/Azjol_Uppercity', 'Azjol_Uppercity');
	build_wmo_map('Dungeon/BlackRockV2', 'BlackRockV2');
	build_wmo_map('Dungeon/BlackWingV2', 'BlackWingV2');

	build_wmo_map('Dungeon/Deepholm', 'Deepholm');
	build_wmo_map('Dungeon/Deepholm', 'Deepholm_TroggTown');
	build_wmo_map('Dungeon/Deepholm', 'DeepholmeExt');
	build_wmo_map('Dungeon/Deepholm', 'DeepholmeExt_Lit_000');
	build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillarbase01');
	build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillarbase02');
	build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillarbase03');
	build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillartop01');
	build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillartop02');
	build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillartop03');
	build_wmo_map('Dungeon/Deepholm', 'Deepholme_towerpiece');

	build_wmo_map('Dungeon/DrakTharon', 'DrakTharon');
	build_wmo_map('Dungeon/DrakTharon', 'DrakTharonRuined');
	build_wmo_map('Dungeon/DrakTharon', 'DrakTharonTower');
	build_wmo_map('Dungeon/DrakTharon', 'DrakTharon_TowerA');
	build_wmo_map('Dungeon/DrakTharon', 'DrakTharon_TowerB');


	function build_wmo_map($folder, $map_name, $only_chunks=array(), $exclude_chunks=array(), $alt_name=''){

		global $blps, $pngs, $flats;

		$out_name = $alt_name ? $alt_name : $map_name;

		echo "$out_name: ";

		$wmo = "$blps/World/wmo/$folder/{$map_name}.wmo";

		#echo "WMO: $wmo\n";
		#exit;

		$chunks = extract_mogi($wmo);

#foreach ($chunks as $k => $v){
#	echo "$k,$v[0],$v[1],$v[2]\n";
#}
#exit;

		#
		# filter chunks?
		#

		if (count($only_chunks)){
			foreach ($chunks as $k => $v){
				if (!in_array($k, $only_chunks)) unset($chunks[$k]);
			}
		}else if (count($exclude_chunks)){
			foreach ($chunks as $k => $v){
				if (in_array($k, $exclude_chunks)) unset($chunks[$k]);
			}
		}
#print_r($chunks);

		#
		# find out size of all group chunks
		#

		$png_folder = str_replace('/', '_', $folder);
		$png_prefix = $map_name.'_';

		$files = glob("$pngs/WMO_$png_folder/$png_prefix*");
		$pieces = array();
		$rx = preg_quote($png_prefix, '!').'(\d\d\d)_(\d\d)_(\d\d)\.png$';
		foreach ($files as $file){
			if (preg_match("!$rx!", $file, $m)){
				list($w, $h) = getimagesize($file);
				$pieces[intval($m[1])][] = array(
					'path'	=> $file,
					'group'	=> intval($m[1]),
					'x'	=> intval($m[2]),
					'y'	=> intval($m[3]),
					'w'	=> $w,
					'h'	=> $h,
				);
			}
		}


		#
		# build a list of group chunks with the total size and the positions of all the subchunks
		#

		$total_pngs = 0;

		$groups = array();
		foreach ($pieces as $idx => &$group){

			$total_h = 0;
			$total_w = 0;
			$chunk_w = 0;
			$chunk_h = 0;

			foreach ($group as $row){
				if ($row['x'] == 0) $total_h += $row['h'];
				if ($row['y'] == 0) $total_w += $row['w'];
				$chunk_w = max($chunk_w, $row['x']+1);
				$chunk_h = max($chunk_h, $row['y']+1);
			}

			$our_pngs = array();

			$y_pos = $total_h;
			for ($y=0; $y<$chunk_h; $y++){
				$x_pos = 0;
				for ($x=0; $x<$chunk_w; $x++){
					foreach ($group as $row){
						if ($row['x'] == $x && $row['y'] == $y){
							$our_pngs[] = array($row['path'], $row['w'], $row['h'], $x_pos, $y_pos-$row['h']);
						}
					}

					$x_pos += 256;
				}
				$y_pos -= 256;
			}

			$total_pngs += count($our_pngs);

			$groups[$idx] = array(
				'w'	=> $total_w,
				'h'	=> $total_h,
				'pngs'	=> $our_pngs,
			);
		}

		#print_r($groups);
		#exit;


		#
		# need to double chunk coords
		#

		foreach ($chunks as $k => $pos){
			$chunks[$k][0] *= 1.993;
			$chunks[$k][1] *= 1.993;
		}


		#
		# adjust chunk positions so they start in top left
		#

		$x1s = array();
		$y1s = array();
		$x2s = array();
		$y2s = array();

		foreach ($chunks as $k => $pos){
			$chunks[$k][1] -= $groups[$k]['h'];

			$x1s[] = $chunks[$k][0];
			$y1s[] = $chunks[$k][1];

			$x2s[] = $chunks[$k][0] + $groups[$k]['w'];
			$y2s[] = $chunks[$k][1] + $groups[$k]['h'];
		}

		$min_x = min($x1s);
		$min_y = min($y1s);

		foreach ($chunks as $k => $pos){
			$chunks[$k][0] -= $min_x;
			$chunks[$k][1] -= $min_y;
		}

		$canvas_w = ceil(max($x2s) - $min_x);
		$canvas_h = ceil(max($y2s) - $min_y);


		$total_chunks = count($chunks);
		echo "($total_chunks chunks, $total_pngs pngs) ";

#print_r($chunks);
#print_r($groups);
		$dst = "$flats/{$out_name}.png";

		echo shell_exec("convert -size !{$canvas_w}x{$canvas_h} null: -matte -compose Clear -composite -compose Over $dst");
		#echo shell_exec("convert xc:{$bg_color} -geometry !{$canvas_w}x{$canvas_h} $dst");

		uasort($chunks, 'zsort_chunks');

		foreach ($chunks as $k => $chunk){

			if (is_array($groups[$k]['pngs']))
			foreach ($groups[$k]['pngs'] as $row){

				$x = floor($chunk[0] + $row[3]);
				$y = floor($chunk[1] + $row[4]);

				$cmd = "composite $row[0] -geometry +{$x}+{$y} $dst $dst";
				#echo "$cmd\n";
				echo shell_exec($cmd);
				echo '.';
			}
		}
		echo shell_exec("convert $dst -rotate 90 $dst");
		echo " done\n";
	}

	function zsort_chunks($a, $b){
		return $a[2]-$b[2];
	}



	function extract_pos($name){

		$fh = fopen($name, 'r');
		fseek($fh, 24);
		$floats = fread($fh, 24);
		$box = unpack('f6', $floats);

		$x1 = $box[1];
		$y1 = $box[3];

		$x2 = $box[4];
		$y2 = $box[6];

		return "$x1,$y1 -> $x2,$y2";
	}

	function extract_group_id($name){

		$fh = fopen($name, 'r');
		fseek($fh, 20 + 0x38);
		$id = read_int($fh);
		fclose($fh);

		return $id;
	}

	function extract_root_id($name){

		$fh = fopen($name, 'r');
		fseek($fh, 20 + 0x20);
		$id = read_int($fh);
		fclose($fh);

		return $id;
	}


	function chunk_map($fh, $seek=1){

		if ($seek){
			$offset = 0;
			fseek($fh, 0);
		}else{
			$offset = ftell($fh);
		}

		while (!feof($fh)){

			$type = fread($fh, 4);
			if (strlen($type) < 4) return;
			$type = strrev($type);

			$size = read_int($fh);
			fseek($fh, $size, SEEK_CUR);

			echo "$type: $size (@$offset)\n";

			$offset += 8 + $size;
		}
	}

	function seek_to_chunk($fh, $name){

		fseek($fh, 0);
		while (!feof($fh)){

			$type = fread($fh, 4);
			if (strlen($type) < 4) break;
			$type = strrev($type);

			$size = read_int($fh);
			if ($type == $name) return true;

			fseek($fh, $size, SEEK_CUR);
		}

		return false;
	}



	function read_int($fh){
                $data = fread($fh, 4);
                list($junk, $n) = unpack('V', $data);
                return $n;
        }


	function extract_mogi($filename){

		$fh = fopen($filename, 'r');

		seek_to_chunk($fh, 'MOHD');
		fseek($fh, 4, SEEK_CUR);
		$groups = read_int($fh);

		seek_to_chunk($fh, 'MOHD');
		fseek($fh, 0x24, SEEK_CUR);
		$floats = fread($fh, 24);
		$box = unpack('f6', $floats);
		#echo "root\t\t: ".format_box($box)."\n";

		$chunks = array();

		seek_to_chunk($fh, 'MOGI');
		for ($i=0; $i<$groups; $i++){

			$flags = read_int($fh);
			$floats = fread($fh, 24);
			$box = unpack('f6', $floats);
			$name = read_int($fh);

			$chunks[$i] = array($box[1], 0-$box[2], $box[3]);

			#echo "group $i \t: ".format_box($box)."\n";
			#print_r($box);
		}

		#echo "found $groups groups\n";
		#exit;

		fclose($fh);

		return $chunks;
	}


function format_box($box){
	$x1 = str_pad(round($box[1]), 4, ' ', STR_PAD_LEFT);
	$y1 = str_pad(round($box[2]), 4, ' ', STR_PAD_LEFT);
	$z1 = str_pad(round($box[3]), 4, ' ', STR_PAD_LEFT);
	$x2 = str_pad(round($box[4]), 4, ' ', STR_PAD_LEFT);
	$y2 = str_pad(round($box[5]), 4, ' ', STR_PAD_LEFT);
	$z2 = str_pad(round($box[6]), 4, ' ', STR_PAD_LEFT);


	return round($box[1]).','.round(0-$box[2]);

	$from = round(27+32+0-$box[6]).','.round(103+$box[1]);
	$to = round(27+32+0-$box[3]).','.round(103+$box[4]);
	return "$from - $to";

	return "($x1, $y1, $z1) - ($x2, $y2, $z2)";
}
