<?php
	include('config.php');
	include('colors.php');

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

		#	'azeroth',
		#	'outland',
		#	'vashjir',
		#	'deepholm',

		#	'bg_wsg',
		#	'bg_ab',
		#	'bg_av',
		#	'bg_eots',
		#	'bg_sota',
		#	'bg_ioc',
		#	'bg_bfg',
		#	'bg_tp',

		#	'inst_rfc',
		#	'inst_vc',
		#	'inst_wc',
		#	'inst_sfk',
		#	'inst_bfd',
		#	'inst_stocks',
		#	'inst_gnomer',
		#	'inst_sm',
		#	'inst_rfk',
		#	'inst_mara',
		#	'inst_ulda',
		#	'inst_dm',
		#	'inst_scholo',
		#	'inst_rfd',
		#	'inst_strat',
		#	'inst_zf',
		#	'inst_brd',
		#	'inst_st',
		#	'inst_lbrs',
		#	'inst_ubrs',

			'inst_ramps',
			'inst_bf',
			'inst_sh',
			'inst_sp',
			'inst_ub',
			'inst_sv',
			'inst_mt',
			'inst_ac',
			'inst_seth',
			'inst_slabs',
			'inst_hillsbrad',
			'inst_bm',
			'inst_mech',
			'inst_bot',
			'inst_arc',
			'inst_mgt',

			'inst_uk',
			'inst_nexus',
			'inst_ok',
			'inst_an',
			'inst_dtk',
			'inst_vh',
			'inst_gun',
			'inst_hos',
			'inst_hol',
			'inst_oculus',
			'inst_cos',
			'inst_up',
			'inst_toc',
			'inst_fos',
			'inst_pos',
			'inst_hor',

			'inst_tot',
			'inst_brc',
			'inst_sc',
			'inst_vp',
			'inst_lc',
			'inst_hoo',
			'inst_gb',
			'inst_za',
			'inst_zg',
			'inst_et',
			'inst_woe',
			'inst_hot',

			'raid_mc',
			'raid_bwl',
			'inst_aq20',
			'raid_aq40',

			'raid_kara',
			'raid_gruul',
			'raid_mag',
			'raid_ssc',
			'raid_tk',
			'inst_bmh',
			'raid_bt',
			'raid_sunwell',

			'raid_naxx',
			'raid_os',
			'raid_voa',
			'raid_eoe',
			'raid_ulduar',
			'raid_toc',
			'raid_ony',
			'raid_rs',
			'raid_icc',

			'raid_bh',
			'raid_bot',
			'raid_tofw',
			'raid_bwd',
			'raid_fl',
			'raid_ds',

			'misc_undercity',
			'misc_if',
			'misc_exodar',
			'misc_subway',
			'misc_cot',
			'misc_dal',
			'misc_dmf',
			'misc_fl',

		))) return;

		global $colors;

		if (!$colors[$dir]){
			die("ERROR: no compositing color found for $dir!\n");
		}

		$color = $colors[$dir] ? $colors[$dir] : 'NO-COLOR';
		echo "$dir: ($color) \n";

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

			}else if ($file != '.' && $file != '..'){

				unlink("$pngs/$dir/$file");
				#echo "DELETE $file\n";
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
		if ($dir == 'bg_sota') $max_zoom = 1;
		if ($dir == 'bg_wsg') $max_zoom = 1;
		if ($dir == 'bg_tp') $max_zoom = 1;

		$pairs = array();

		for ($zoom=$max_zoom; $zoom>=1; $zoom--){

			$pow = pow(2, $zoom);
			$slice = 256 / $pow;

			$layer_w = ceil(($max_x+1) / $pow);
			$layer_h = ceil(($max_y+1) / $pow);

			echo "\tlayer $zoom is $layer_w x $layer_h : ";
			$pairs[] = "$layer_w,$layer_h";

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

				$color = $colors[$dir] ? $colors[$dir] : '#000000';

				#echo shell_exec("convert -size 256x256 null: -matte -compose Clear -composite -compose Over $dst");
				echo shell_exec("convert -size 256x256 xc:$color $dst");

				for ($x2=$min_x; $x2<=$max_x; $x2++){
				for ($y2=$min_y; $y2<=$max_y; $y2++){
					$file = $tiles["$x2/$y2"];
					if (!$file) continue;
					$tile_x = ($x2-$min_x) * $slice;
					$tile_y = ($y2-$min_y) * $slice;

					echo shell_exec("composite -geometry {$slice}x{$slice}+{$tile_x}+{$tile_y} $pngs/$dir/$file $dst png24:$dst");
				}
				}

				echo ".";
			}
			}

			echo " done\n";
			#exit;
		}

		echo "\tlayer 0 is $zero_w x $zero_h\n";
		$pairs[] = "$zero_w,$zero_h";

		echo "\t".implode(', ', $pairs)."\n";

#		print_r($tiles);
	}
