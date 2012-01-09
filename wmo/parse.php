<?
extract_mogi('LavaDungeon.wmo');
exit;

if (0){
	echo "root: ".extract_root_id('LavaDungeon.wmo')."\n";
	echo "000 : ".extract_group_id('LavaDungeon_000.wmo')."\n";
	echo "001 : ".extract_group_id('LavaDungeon_001.wmo')."\n";
	echo "002 : ".extract_group_id('LavaDungeon_002.wmo')."\n";
	echo "003 : ".extract_group_id('LavaDungeon_003.wmo')."\n";
	echo "004 : ".extract_group_id('LavaDungeon_004.wmo')."\n";
	echo "005 : ".extract_group_id('LavaDungeon_005.wmo')."\n";
	echo "006 : ".extract_group_id('LavaDungeon_006.wmo')."\n";
	echo "007 : ".extract_group_id('LavaDungeon_007.wmo')."\n";
	echo "008 : ".extract_group_id('LavaDungeon_008.wmo')."\n";
	echo "009 : ".extract_group_id('LavaDungeon_009.wmo')."\n";
	echo "010 : ".extract_group_id('LavaDungeon_010.wmo')."\n";
	echo "011 : ".extract_group_id('LavaDungeon_011.wmo')."\n";
	ecit;
}

#$fh = fopen('LavaDungeon_000.wmo', 'r');
#seek_to_chunk($fh, 'MOGP');


	$fh = fopen('LavaDungeon.wmo', 'r');
	seek_to_chunk($fh, 'MOHD');

	fseek($fh, 4, SEEK_CUR);
	$groups = read_int($fh);
	$portals = read_int($fh);
	echo "p: $portals\n";
	exit;



#$fh = fopen('LavaDungeon_000.wmo', 'r');
#seek_to_chunk($fh, 'MOGP');
#fseek($fh, 0x44, SEEK_CUR);
#chunk_map($fh, 0);
#exit;

$fh = fopen('LavaDungeon.wmo', 'r');
chunk_map($fh);
#seek_to_chunk($fh, 'MOGN');
#$data = fread($fh, 204);
#echo str_replace("\0","\n",$data)."\n";
exit;


#	$fh = fopen('OrgrimmarInstance.wdt', 'r');
#chunk_map($fh);

	#seek_to_chunk($fh, 'MAOF');
	#$data = fread($fh, 4096*4);
	#echo urlencode($data);
#exit;



extract_mogi('LavaDungeon.wmo'	);

$fh = fopen('LavaDungeon.wmo', 'r');
chunk_map($fh);

echo extract_pos('LavaDungeon_000.wmo')."\n";
echo extract_pos('LavaDungeon_001.wmo')."\n";
echo extract_pos('LavaDungeon_002.wmo')."\n";
echo extract_pos('LavaDungeon_011.wmo')."\n";


	#chunk_map($fh);



	function extract_pos($name){

		$fh = fopen($name, 'r');
		fseek($fh, 24);
		$floats = fread($fh, 24);
		$box = unpack('f6', $floats);

		$x1 = $box[1];
		$y1 = $box[3];

		$x2 = $box[4];
		$y2 = $box[6];

		return "$x1,$y1 -> $x2,$y2";
	}

	function extract_group_id($name){

		$fh = fopen($name, 'r');
		fseek($fh, 20 + 0x38);
		$id = read_int($fh);
		fclose($fh);

		return $id;
	}

	function extract_root_id($name){

		$fh = fopen($name, 'r');
		fseek($fh, 20 + 0x20);
		$id = read_int($fh);
		fclose($fh);

		return $id;
	}


	function chunk_map($fh, $seek=1){

		if ($seek){
			$offset = 0;
			fseek($fh, 0);
		}else{
			$offset = ftell($fh);
		}

		while (!feof($fh)){

			$type = fread($fh, 4);
			if (strlen($type) < 4) return;
			$type = strrev($type);

			$size = read_int($fh);
			fseek($fh, $size, SEEK_CUR);

			echo "$type: $size (@$offset)\n";

			$offset += 8 + $size;
		}
	}

	function seek_to_chunk($fh, $name){

		fseek($fh, 0);
		while (!feof($fh)){

			$type = fread($fh, 4);
			if (strlen($type) < 4) break;
			$type = strrev($type);

			$size = read_int($fh);
			if ($type == $name) return true;

			fseek($fh, $size, SEEK_CUR);
		}

		return false;
	}



	function read_int($fh){
                $data = fread($fh, 4);
                list($junk, $n) = unpack('V', $data);
                return $n;
        }


	function extract_mogi($filename){

		$fh = fopen($filename, 'r');

		seek_to_chunk($fh, 'MOHD');
		fseek($fh, 4, SEEK_CUR);
		$groups = read_int($fh);

		seek_to_chunk($fh, 'MOHD');
		fseek($fh, 0x24, SEEK_CUR);
		$floats = fread($fh, 24);
		$box = unpack('f6', $floats);
		echo "root\t\t: ".format_box($box)."\n";

		seek_to_chunk($fh, 'MOGI');
		for ($i=0; $i<$groups; $i++){

			$flags = read_int($fh);
			$floats = fread($fh, 24);
			$box = unpack('f6', $floats);
			$name = read_int($fh);



			echo "group $i \t: ".format_box($box)."\n";
			#print_r($box);
		}

		#echo "found $groups groups\n";
		#exit;
	}


function format_box($box){
	$x1 = str_pad(round($box[1]), 4, ' ', STR_PAD_LEFT);
	$y1 = str_pad(round($box[2]), 4, ' ', STR_PAD_LEFT);
	$z1 = str_pad(round($box[3]), 4, ' ', STR_PAD_LEFT);
	$x2 = str_pad(round($box[4]), 4, ' ', STR_PAD_LEFT);
	$y2 = str_pad(round($box[5]), 4, ' ', STR_PAD_LEFT);
	$z2 = str_pad(round($box[6]), 4, ' ', STR_PAD_LEFT);


	return round($box[1]).','.round(0-$box[2]);

	$from = round(27+32+0-$box[6]).','.round(103+$box[1]);
	$to = round(27+32+0-$box[3]).','.round(103+$box[4]);
	return "$from - $to";

	return "($x1, $y1, $z1) - ($x2, $y2, $z2)";
}
