<?
	#
	# take world tiles and build a chunk ready for assembling along with wmo chunks
	#

	include('../build/config.php');


	#create_world('inst_vc', 'deadminesinstance', 33, 33, 31, 32, 32, 160, 192, 256);
	create_world('inst_sfk', 'shadowfang', 27, 28, 32, 32, 150, 30, 150, 130);

	function create_world($out_name, $map_name, $x1, $x2, $y1, $y2, $crop_x, $crop_y, $crop_w, $crop_h){

		echo "$out_name: ";

		global $pngs, $flats;

		$temp = "$flats/temp.png";
		$dst = "$flats/{$out_name}.png";
		$w = 256 * (1 + $x2 - $x1);
		$h = 256 * (1 + $y2 - $y1);

		echo shell_exec("convert xc:blue -geometry !{$w}x{$h} $temp");

		for ($x=$x1; $x<=$x2; $x++){
		for ($y=$y1; $y<=$y2; $y++){

			$xp = ($x-$x1) * 256;
			$yp = ($y-$y1) * 256;

			$xx = sprintf('%02d', $x);
			$yy = sprintf('%02d', $y);

			$src = "$pngs/{$map_name}/map{$xx}_{$yy}.png";

			echo shell_exec("composite $src -geometry +{$xp}+{$yp} $temp $temp");
			echo '.';

			#echo "$dst $src $xp,$yp\n";
		}
		}

		echo shell_exec("convert $temp -crop {$crop_w}x{$crop_h}+{$crop_x}+{$crop_y}! $dst");

		echo " done\n";
	}
