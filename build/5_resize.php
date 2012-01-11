<?php
	include('config.php');

	$pngs = $built;


	#
	# build a list of maps for us to construct
	#

	$dh = opendir($pngs);
	while ($file = readdir($dh)){
		if ($file != '.' && $file != '..' && is_dir("$pngs/$file")){
			process_dir($pngs, $file);
		}
	}
	closedir($dh);

	function process_dir($pngs, $dir){

		if (!in_array($dir,array(
		#	'inst_bfd',
		#	'inst_stocks',
		#	'inst_gnomer',
		#	'inst_rfk',
		#	'inst_rfd',
		#	'inst_mara',
		#	'inst_ulda',
		#	'inst_dm',
		#	'inst_strat',
		#	'raid_naxx',
		#	'raid_mc',
		#	'inst_brd',
		#	'inst_st',
		#	'raid_ony',
		#	'raid_aq40',
		#	'inst_sp',
		#	'inst_sv',
		#	'inst_ub',
		#	'raid_ssc',
		#	'inst_arc',
		#	'inst_mech',
		#	'inst_bot',
		#	'raid_tk',
		#	'inst_sh',
		#	'inst_bf',
		#	'raid_mag',
		#	'raid_gruul',
		#	'inst_mt',
		#	'inst_ac',
		#	'inst_seth',
		#	'inst_slabs',
		#	'inst_brc',
		#	'raid_bwd',
		#	'inst_sc',
		#	'inst_gb',
		#	'raid_bot',
		#	'inst_hor',
		#	'inst_fos',
		#	'inst_up',
		#	'inst_vh',
		#	'inst_gun',
		#	'inst_vc',
		#	'inst_sfk',
		#	'inst_zg',
		#	'inst_za',
		#	'inst_lc',
		#	'inst_hos',
		#	'inst_hol',
		#	'inst_lbrs',
		#	'inst_ubrs',
		#	'inst_aq20',
			'inst_bm',
			'inst_pos',
		))) return;

		echo "$dir: \n";

		$tiles = array();
		$all_x = array();
		$all_y = array();

		$dh = opendir("$pngs/$dir");
		while ($file = readdir($dh)){

			if (preg_match('!^tile_z0_(\d\d)_(\d\d)\.png$!', $file, $m)){

				$x = intval($m[1]);
				$y = intval($m[2]);

				$all_x[] = $x;
				$all_y[] = $y;

				$tiles["$x/$y"] = $file;
			}
		}
		closedir($dh);

		$max_x = max($all_x);
		$max_y = max($all_y);

		$zero_w = $max_x+1;
		$zero_h = $max_y+1;

		$max_zoom = 0;

		$zw = $zero_w;
		$zh = $zero_h;
		while ($zh > 3 || $zw > 3){
			$max_zoom++;
			$zh = ceil($zero_h / pow(2, $max_zoom));
			$zw = ceil($zero_w / pow(2, $max_zoom));
		}

		if ($dir == 'azeroth') $max_zoom = 5;
		if ($dir == 'outland') $max_zoom = 4;
		if ($dir == 'vashjir') $max_zoom = 3;
		if ($dir == 'deepholm') $max_zoom = 2;
		if ($dir == 'inst_bmh') $max_zoom = 2;
		if ($dir == 'inst_hillsbrad') $max_zoom = 2;
		if ($dir == 'inst_wc') $max_zoom = 2;
		if ($dir == 'inst_sm') $max_zoom = 2;

		for ($zoom=$max_zoom; $zoom>=1; $zoom--){

			$pow = pow(2, $zoom);
			$slice = 256 / $pow;

			$layer_w = ceil(($max_x+1) / $pow);
			$layer_h = ceil(($max_y+1) / $pow);

			echo "\tlayer $zoom is $layer_w x $layer_h : ";

			for ($x=0; $x<$layer_w; $x++){
			for ($y=0; $y<$layer_h; $y++){

				$min_x = ($x * $pow);
				$min_y = ($y * $pow);

				$max_x = (($x+1) * $pow) - 1;
				$max_y = (($y+1) * $pow) - 1;

			#	echo "tile $x,$y contains ($min_x,$min_y)-($max_x,$max_y)\n";

				# do we have any source tiles that fit in this?
				$found = 0;
				for ($x2=$min_x; $x2<=$max_x; $x2++){
					for ($y2=$min_y; $y2<=$max_y; $y2++){
						if ($tiles["$x2/$y2"]){
							$found = 1;
							break 2;
						}
					}
				}
				if (!$found) continue;

				# we need to actually make this tile!
				$dst = "$pngs/$dir/tile_z{$zoom}_".sprintf('%02d_%02d', $x, $y).'.png';

				echo shell_exec("convert -size 256x256 null: -matte -compose Clear -composite -compose Over $dst");
				#echo shell_exec("convert -size 256x256 xc:red $dst");

				for ($x2=$min_x; $x2<=$max_x; $x2++){
				for ($y2=$min_y; $y2<=$max_y; $y2++){
					$file = $tiles["$x2/$y2"];
					if (!$file) continue;
					$tile_x = ($x2-$min_x) * $slice;
					$tile_y = ($y2-$min_y) * $slice;

					echo shell_exec("composite -geometry {$slice}x{$slice}+{$tile_x}+{$tile_y} $pngs/$dir/$file $dst $dst");
				}
				}

				echo ".";
			}
			}

			echo " done\n";
			#exit;
		}

		echo "\tlayer 0 is $zero_w x $zero_h\n";

#		print_r($tiles);
	}
