<?
	$pngs = '/var/www/doats.net/tiles/pngs';
	$built = '/var/www/doats.net/tiles/built';

if (1){
	clean_set('azeroth');

	build_set('azeroth', 'Kalimdor/map', 23, 48, 9, 55, 8, 6+7, array('45_20', '46_20', '47_20')); # kalimdor
	build_set('azeroth', 'Expansion01/map', 50, 59, 32, 42, 0, 11+7, array('58_32')); # exodar

	build_set('azeroth', 'Azeroth/map', 17, 45, 22, 61, 34+21, 12+7); # eastern kingdoms
	build_set('azeroth', 'Expansion01/map', 41, 51, 6, 20, 53+21, 0+7, array('46_20', '47_20', '40_20', '41_20', '42_20')); # silvermoon city & isle

	build_set('azeroth', 'Northrend/map', 16, 45, 11, 33, 33, 0); # northrend

	build_set('azeroth', 'LostIsles/map', 26, 32, 45, 51, 41, 53); # kezan
	build_set('azeroth', 'LostIsles/map', 24, 31, 26, 32, 33, 46); # lost isles

	build_set('azeroth', 'TolBarad/map', 27, 32, 31, 37, 57, 30); # tol barad

	build_set('azeroth', 'MaelstromZone/map', 28, 32, 28, 32, 46, 33); # maelstrom
}
if (0){
	clean_set('outland');
	build_set('outland', 'Expansion01/map', 12, 33, 21, 42, 0, 0);
}
if (0){
	clean_set('deepholm');
	build_set('deepholm', 'Deephome/map', 28, 33, 27, 32, 0, 0, array('28_27','28_32','33_27','33_32'));

	patch_set('deepholm', '#2E2D36', 256, 0, 256+161, 63);
	patch_set('deepholm', '#2E2D36', 256, 0, 256+48, 144);
	patch_set('deepholm', '#2E2D36', 256, 0, 256+16, 224);

	patch_set('deepholm', '#2E2D36', 0, 256, 17, 512+31);
	patch_set('deepholm', '#2E2D36', (5*256)+190, 256, 6*256, 256+20);
	patch_set('deepholm', '#2E2D36', (5*256)+208, 768+222, 6*256, 5*256);

	patch_set('deepholm', '#2E2D36', 256, (256*5)+224, 5*256, 256*6);
	patch_set('deepholm', '#2E2D36', 256, (256*5)+78, 256+114, 256*6);
}
if (0){
	clean_set('bg_eots');
	build_set('bg_eots', 'NetherstormBG/map', 28, 30, 26, 29, 0, 0);
}
if (0){
	clean_set('bg_ab');
	build_set('bg_ab', 'PVPZone04/map', 28, 31, 28, 31, 0, 0);
	patch_set('bg_ab', '#414318', 0, 0, 1024, 48);
	patch_set('bg_ab', '#414318', 0, 1024-50, 1024, 1024);
	patch_set('bg_ab', '#414318', 0, 0, 48, 1024);
	patch_set('bg_ab', '#414318', 1024-50, 0, 1024, 1024);
}
if (0){
	clean_set('bg_sota');
	build_set('bg_sota', 'NorthrendBG/map', 30, 33, 25, 31, 0, 0);
	patch_set('bg_sota', '#052431', 0, 1536+128, 1024, 1792); 
}
if (0){
	clean_set('bg_ioc');
	build_set('bg_ioc', 'IsleofConquest/map', 31, 37, 28, 33, 0, 0);
}
if (0){
	clean_set('bg_bfg');
	build_set('bg_bfg', 'Gilneas_BG_2/map', 28, 31, 28, 30, 0, 0);
	patch_set('bg_bfg', '#000C18', 768+127, 0, 1024, 1024);
	patch_set('bg_bfg', '#000C18', 0, 768+160, 1024, 1024);
	patch_set('bg_bfg', '#000C18', 0, 512+176, 1024, 768);
}
if (0){
	clean_set('bg_tp');
	build_set('bg_tp', 'CataclysmCTF/map', 30, 32, 27, 29, 0, 0);
	patch_set('bg_tp', '#8E8175', 0, 0, 209, 209);
	patch_set('bg_tp', '#8E8175', 0, 0, 256*3, 32);
	patch_set('bg_tp', '#8E8175', 0, 210, 112, 256+256+62);
	patch_set('bg_tp', '#8E8175', 0, 512, 32, 512+256);
	patch_set('bg_tp', '#8E8175', 0, 512+240, 256*3, 256*3);
	patch_set('bg_tp', '#8E8175', 512+64, 32, 512+256, 208);
	patch_set('bg_tp', '#8E8175', 512+225, 209, 512+256, 512+63);
	patch_set('bg_tp', '#8E8175', 512+112, 512+47, 512+256, 512+63);
}


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

	function patch_set($set_name, $color, $x1, $y1, $x2, $y2){

		global $built;

		# apply a color to some tiles
		$min_tile_x = floor($x1 / 256);
		$min_tile_y = floor($y1 / 256);
		$max_tile_x = floor($x2 / 256);
		$max_tile_y = floor($y2 / 256);

		for ($x=$min_tile_x; $x<=$max_tile_x; $x++){
		for ($y=$min_tile_y; $y<=$max_tile_y; $y++){

			# applying patch to tile $x,$y
			$dst_key = sprintf('%02d_%02d', $x, $y);
			$dst = "$built/$set_name/tile_z0_$dst_key.png";
			if (!file_exists($dst)) continue;

			$start_x = $x*256;
			$start_y = $y*256;

			$my_x1 = $x1 - $start_x;
			$my_x2 = $x2 - $start_x;

			$my_y1 = $y1 - $start_y;
			$my_y2 = $y2 - $start_y;

			$my_x1 = max(min(255, $my_x1), 0);
			$my_x2 = max(min(255, $my_x2), 0);
			$my_y1 = max(min(255, $my_y1), 0);
			$my_y2 = max(min(255, $my_y2), 0);

			$w = ($my_x2 - $my_x1) + 1;
			$h = ($my_y2 - $my_y1) + 1;

			#echo "applying patch to $x,$y $dst, {$w}x{$h}+{$my_x1}+{$my_y1} ($my_x1,$my_y1 - $my_x2,$my_y2)\n";

			#echo shell_exec("composite -geometry {$w}x{$h}!+{$my_x1}+{$my_y1} xc:red $dst $dst");
			echo shell_exec("convert $dst -fill '$color' -draw 'rectangle $my_x1,$my_y1 $my_x2,$my_y2' $dst");
		}
		}
	}

	function clean_set($set_name){

		global $built;
		shell_exec("rm -rf $built/$set_name");
	}

	echo "\ndone\n";
