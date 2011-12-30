<?php
	$pngs = "/var/www/doats.net/tiles/built";


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

		if ($dir != 'bg_ab') return;

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

		$max_zoom = 1;
		if ($dir == 'azeroth') $max_zoom = 5;
		if ($dir == 'outland') $max_zoom = 4;
		if ($dir == 'deepholm') $max_zoom = 2;

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

		$max_x++;
		$max_y++;
		echo "\tlayer 0 is $max_x x $max_y\n";

#		print_r($tiles);
	}
