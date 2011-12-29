<?
	$pngs = '/var/www/doats.net/tiles/pngs';
	$built = '/var/www/doats.net/tiles/built';

	clean_set('azeroth');

	build_set('azeroth', 'Kalimdor/map', 23, 48, 9, 55, 8, 6+7); # kalimdor
	build_set('azeroth', 'Expansion01/map', 50, 59, 32, 42, 0, 11+7, array('58_32')); # exodar

	build_set('azeroth', 'Azeroth/map', 17, 45, 22, 61, 34+21, 12+7); # eastern kingdoms
	build_set('azeroth', 'Expansion01/map', 41, 51, 6, 20, 53+21, 0+7, array('46_20', '47_20', '40_20', '41_20', '42_20')); # silvermoon city & isle

	build_set('azeroth', 'Northrend/map', 16, 45, 11, 33, 33, 0); # northrend

	build_set('azeroth', 'LostIsles/map', 26, 32, 45, 51, 41, 53); # kezan
	build_set('azeroth', 'LostIsles/map', 24, 31, 26, 32, 33, 46); # lost isles

	build_set('azeroth', 'TolBarad/map', 27, 32, 31, 37, 57, 30); # tol barad

	build_set('azeroth', 'MaelstromZone/map', 28, 32, 28, 32, 46, 27); # maelstrom

	function build_set($set_name, $src_path, $min_x, $max_x, $min_y, $max_y, $offset_x, $offset_y, $skips=array()){

		global $pngs;
		global $built;

		@mkdir("$built/$set_name");

		for ($x=$min_x; $x<=$max_x; $x++){
		for ($y=$min_y; $y<=$max_y; $y++){

			$src_key = sprintf('%02d_%02d', $x, $y);
			$dst_key = sprintf('%02d_%02d', ($x-$min_x)+$offset_x, ($y-$min_y)+$offset_y);

			if (in_array($src_key, $skips)) continue;

			$src = "$pngs/$src_path$src_key.png";
			$dst = "$built/$set_name/tile_z0_$dst_key.png";

			$src16 = "$pngs/$src_path$src_key--16.png";
			$dst16 = "$built/$set_name/tile_z0_$dst_key--16.png";

			@copy($src, $dst);
			@copy($src16, $dst16);
			echo '.';
		}
		}
	}

	function clean_set($set_name){

		global $built;
		shell_exec("rm -rf $built/$set_name");
	}

	echo "\ndone\n";
