<?
	# run this after you're extracted the files from the MPQs.
	# if changes all paths to lowercase so they're grouped correctly.

	include('config.php');


	#
	# get file list
	#

	echo "searching... ";

	chdir($blps_raw);
	$files = explode("\n", trim(shell_exec("find .")));

	$num = count($files);
	echo "found $num files\n";


	#
	# move files
	#

	echo "moving... ";

	#$time = time();
	#shell_exec("mv $blps {$blps}_backup_$time");
	#mkdir($blps);

	foreach ($files as $file){
		if (!preg_match('!\.(blp|wmo)$!i', $file)) continue;

		$file = substr($file, 1);
		$low = "$blps".StrToLower($file);
		$src = $blps_raw.$file;

		# some paths even have spaces! "world/minimaps/stratholme raid"
		$low = str_replace(' ', '_', $low);

		$bits = explode('/', $low);
		array_pop($bits);
		$path = implode('/', $bits);


		@mkdir($path, 0777, true);
		rename($src, $low);
	}

	echo "done\n";


#print_r($ret);
