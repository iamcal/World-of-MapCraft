<?php
	$pngs = "/var/www/doats.net/tiles/built";
	$maps = "/var/www/doats.net/tiles/built";
	$pngs_url = "/tiles/built";

	$size = 128;


	#
	# build a list of maps for us to construct
	#

	$map = array();

	$dh = opendir($pngs);
	while ($file = readdir($dh)){
		if ($file != '.' && $file != '..' && is_dir("$pngs/$file")){
			process_dir($pngs, $file, $map);
		}
	}
	closedir($dh);

	function process_dir($pngs, $dir, &$map){

		$dh = opendir("$pngs/$dir");
		while ($file = readdir($dh)){

			if (preg_match('!^tile_z0_(\d\d)_(\d\d)\.png$!', $file, $m)){

				$key = StrToLower($dir);
				$map[$key]["$m[1]-$m[2]"] = "$pngs/$dir/$file";
			}
		}
		closedir($dh);
	}


	#
	# now build the maps
	#

	foreach ($map as $name => $files){

		$num = count($files);

		if ($num < 3) continue;

		echo "$name ($num chunks) : ";

		$out = '<html><head></head><body><h1>'.$name.'</h1>';
		$out .= "<style>body { background-image: url('/tiles/purple-stripes.png'); } td { font-size: 5px }</style>\n";

		$all_x = array();
		$all_y = array();

		foreach ($files as $k => $v){
			list($x, $y) = explode('-', $k);
			$all_x[] = intval($x);
			$all_y[] = intval($y);
		}

		$min_x = min($all_x);
		$max_x = max($all_x);
		$min_y = min($all_y);
		$max_y = max($all_y);

		$w = 1 + ($max_x - $min_x);
		$h = 1 + ($max_y - $min_y);

		$out .= "$min_x - $max_x, $min_y - $max_y<br />";

		$out .= "<table border=0 cellpadding=0 cellspacing=0>\n";

		for ($y=0; $y<$h; $y++){

			$out .= "<tr>\n";

			for ($x=0; $x<$w; $x++){

				$key = sprintf('%02d-%02d', $min_x+$x, $min_y+$y);

				$file = $files[$key];

				if ($file){
					$url = str_replace($pngs, $pngs_url, $file);
					if ($size <= 16){
						$url = str_replace('.png', '--16.png', $url);
					}

					$out .= "<td><img src=\"$url\" width=$size height=$size /></td>\n";
				}else{
					$out .= '<td>.</td>';
				}
			}

			$out .= "</tr>\n";
		}

		$out .= "</table>\n";
		$out .= '</body></html>';

		$fh = fopen("$maps/{$name}.htm", 'w');
		fwrite($fh, $out);
		fclose($fh);

		echo "ok\n";
	}
