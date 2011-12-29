<?
	$pngs = '/var/www/doats.net/tiles/pngs';
	$built = '/var/www/doats.net/tiles/built';

	clean_set('azeroth');

	build_set('azeroth', 'Kalimdor/map', 23, 48, 9, 55, 8, 6);
	build_set('azeroth', 'Expansion01/map', 50, 59, 32, 42, 0, 11, array('58_32'));

	build_set('azeroth', 'Azeroth/map', 17, 45, 22, 61, 34, 12);
	build_set('azeroth', 'Expansion01/map', 41, 51, 6, 20, 53, 0, array('46_20', '47_20', '40_20', '41_20', '42_20'));


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
