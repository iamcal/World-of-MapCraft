<?php
	include('config.php');


	$files = explode("\n", shell_exec("find $blps/world/minimaps"));

	$map = array();

	foreach ($files as $file){
		if (preg_match('!\.blp$!', $file)){

			$bits = explode('/', $file);
			array_pop($bits);
			$dir = str_replace($blps.'/world/minimaps/', '', implode('/', $bits));

			$dir = str_replace('/', '_', $dir);
			$map[$dir][] = $file;
		}
	}


	foreach ($map as $group => $files){

		#if ($group != 'firelandsdailies') continue;;
		#if ($group != 'azeroth') continue;
		#if ($group != 'wmo_dungeon_md_hyjal') continue;

		$group = str_replace("'", '', $group);

		$num = count($files);
		echo "$group ($num files) : ";

		@mkdir("$pngs/$group");

		foreach ($files as $file){

			#if (!preg_match('!noliq!', $file)) continue;

			# files which get patched as 'deleted' end up with 0 size
			if (!filesize($file)) continue;

			$file_esc = escapeshellarg($file);

			$ret = array();
			$cmd = "$blp_convertor -o $pngs/$group/ -f png $file_esc 2>&1";
			exec($cmd, $ret, $code);
			$all_ret = implode("\n", $ret);

			if (preg_match('!: OK$!', $all_ret)){
				echo ".";
			}else{
				echo 'x';
				echo "\n";
				foreach ($ret as $line) echo "\t$line\n";
				echo "\t";
				continue;
			}

			# make 16px version
			$bits = explode('/', $file);
			$name = array_pop($bits);
			$name = str_replace("'", '', $name);
			$name = str_replace('.blp', '.png', $name);
			$name2 = str_replace('.png', '--16.png', $name);

			exec("convert $pngs/$group/$name -resize 16x16 $pngs/$group/$name2");
			#echo "convert $pngs/$group/$name to $pngs/$group/$name2\n";
			#exit;
		}

		echo "done\n";
		#exit;
	}

	#print_r($map);
