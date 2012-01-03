<?php
	include('config.php');

	$pngs = $built;


	#
	# build a list of maps for us to sync
	#

	$dh = opendir($pngs);
	while ($file = readdir($dh)){
		if ($file != '.' && $file != '..' && is_dir("$pngs/$file")){
			process_dir($pngs, $file);
		}
	}
	closedir($dh);

	function process_dir($pngs, $dir){

		global $s3_cmd;
		global $s3_bucket;

		if ($dir != 'inst_hillsbrad') return;

		echo "$dir: \n";

		$dh = opendir("$pngs/$dir");
		while ($file = readdir($dh)){

			if (preg_match('!^tile_z(\d)_(\d\d)_(\d\d)\.png$!', $file, $m)){

				$args = "--acl-public --guess-mime-type --add-header='Expires:Fri, 10 Jan 2020 23:30:00 GMT' --add-header='Cache-Control:max-age=315360000, public'";
				$cmd = "$s3_cmd $args put $pngs/$dir/$file $s3_bucket/$dir/$file";

				exec($cmd, $ret, $code);
				if ($code){
					echo "\n".implode("\n", $ret)."\n";
				}else{
					echo '.';
				}
			}
		}
		closedir($dh);

		echo " done\n";
	}
