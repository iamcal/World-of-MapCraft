<?
	include('../build/config.php');

	ini_set('memory_limit', '128M');


	process_map('azeroth');

	function process_map($name){

		$folder = "../mop_out/world/maps/$name";

		$zones = array();

		$dh = opendir($folder);
		while (($file = readdir($dh)) !== false){

			if (preg_match('!_(\d+)_(\d+)\.adt$!', $file, $m)){

				extract_areas("$folder/$file", intval($m[1]), intval($m[2]), $zones);
			}
		}

		foreach ($zones as $k => $v){

			$zones[$k] = reduce_squares($v);
		}

		foreach ($zones as $k => $v){
			echo "$name $k $v[0] $v[1] $v[2] $v[3]\n";
		}
	}

	function reduce_squares($s){
		$min_x = $s[0][0];
		$max_x = $s[0][0];
		$min_y = $s[0][1];
		$max_y = $s[0][1];

		foreach ($s as $sq){
			$min_x = min($min_x, $sq[0]);
			$max_x = max($man_x, $sq[0]);
			$min_y = min($min_y, $sq[1]);
			$max_y = max($man_y, $sq[1]);
		}

		return array($min_x,$min_y,$max_x+16,$max_y+16);
	}

	function extract_areas($file, $x, $y, &$zones){

		$fh = fopen($file, 'r');

		# get positions of all chunks
		$offset = 0;
		fseek($fh, 0);
		$chunks = array();
		while (!feof($fh)){

			$type = fread($fh, 4);
			if (strlen($type) < 4) break;
			$type = strrev($type);

			$size = read_int($fh);
			fseek($fh, $size, SEEK_CUR);

			if ($type == 'MCNK') $chunks[] = $offset;
			$offset += 8 + $size;
		}

		$n = 0;
		foreach ($chunks as $off){

			fseek($fh, $off + 0x3C);
			$id = read_int($fh);

			$sx = $n % 16;
			$sy = floor($n/16);

			$xp = ($x*256)+($sx*16);
			$yp = ($y*256)+($sy*16);

			$zones[$id][] = array($xp, $yp);

			$n++;
		}
	}

	function read_int($fh){
                $data = fread($fh, 4);
                list($junk, $n) = unpack('V', $data);
                return $n;
        }

