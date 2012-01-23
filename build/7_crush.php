<?
	include('config.php');

	chdir($built);
	$lines = explode("\n", shell_exec("find ."));

	echo "found ".count($lines)." lines\n";

	$for_real = array();

	foreach ($lines as $line){
		if (!strlen($line)) continue;
		if (!preg_match('!\.png$!', $line)) continue;
		if (preg_match('!--16\.png$!', $line)) continue;

		$src = $built.'/'.$line;
		$dst = $crushed.'/'.$line;

		if (file_exists($dst)) continue;

		$for_real[] = array($src, $dst, $line);
	}

	echo "processing ".count($for_real)." images : ";

	foreach ($for_real as $row){

		list($src, $dst, $name) = $row;
		$tmp = '/tmp/crush.png';

		@mkdir(dirname($dst), 0777, true);
		$cmd = "/root/pngout-20110722-linux-static/i686/pngout-static $src $tmp -y";

		$out = array();
		exec($cmd, $out, $code);

		if ($code != 0){
			$out_flat = implode("\n", $out);

			if ($code == 1 && preg_match('!unsupported format!', $out_flat)){

				echo "\nbad format: $name\n";
				exit;
				#copy($src, $tmp);

			}else if ($code == 2 && preg_match('!Unable to compress further: copying original file!', $out_flat)){

				echo '0';
				copy($src, $dst);
			}else{
				echo "$cmd\n";
				print_r($out);
				echo "code: $code\n";
				#exit;
			}
		}else{
			rename($tmp, $dst);

			echo ".";
		}
	}

	echo " done\n";
