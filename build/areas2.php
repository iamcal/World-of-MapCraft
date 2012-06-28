<?
	#
	# this map shows tile offsets on the master map.
	# we need this so we can figure out absolute pixel offsets.
	#

	$tile_offsets = array(
		# zone			start x,y	offset x,y
		'azeroth'	=> array(17,22, 55,19),
	);


	#
	# load a list of areas & recursively fetch the
	# list of child areas. this is so we can get the
	# list of all possible AreaIDs that are included
	# under a parent AreaID.
	#

	$areas = parse_dbc('../dbc/AreaTable.dbc', array(12), 1);

	$children = array();
	foreach ($areas as $row){
		if ($row[3]) $children[$row[3]][$row[1]] = 1;
	}

	foreach ($areas as $k => $v){
		$areas[$k]['children'] = get_children($children, $k);
	}

	function get_children(&$children, $k){
		if (!$children[$k]) return array();
		$out = $children[$k];
		foreach ($children[$k] as $k2 => $v){
			$m = get_children($children, $k2);
			foreach ($m as $i => $j) $out[$i] = 1;
		}
		return $out;
	}


	#
	# now we can load the zones list and figure out where zones
	# really start/end (by including the areas from their child
	# zones too).
	#

	$lines = file('zones.txt');
	foreach ($lines as $line){
		$fields = explode(' ', trim($line));
		$zones["{$fields[0]}-{$fields[1]}"] = $fields;
	}

#	print_r($areas[1519]);
#	print_r($zones['azeroth-1519']);

	foreach ($zones as $k => $v){

		$info = $areas[$v[1]];
		if ($info[1]){
			foreach ($info['children'] as $id => $junk){
				$more = $zones["{$v[0]}-{$id}"];
				if ($more[0] && true){
					$zones[$k][2] = min($zones[$k][2], $more[2]);
					$zones[$k][3] = min($zones[$k][3], $more[3]);
					$zones[$k][4] = max($zones[$k][4], $more[4]);
					$zones[$k][5] = max($zones[$k][5], $more[5]);
				}
			}
			$zones[$k][] = $info[12];
		}
	}

	echo "var areas = {\n";

	foreach ($zones as $v){
		if ($tile_offsets[$v[0]] && $v[6]){
			$off = $tile_offsets[$v[0]];
			$x_off = ($off[2] - $off[0]) * 256;
			$y_off = ($off[3] - $off[1]) * 256;

			$v[2] += $x_off;
			$v[3] += $y_off;
			$v[4] += $x_off;
			$v[5] += $y_off;

			array_shift($v);

			$n = JSON_encode($v[5]);
			echo "$v[0] : [$v[1], $v[2], $v[3], $v[4], $n],\n";
			#echo implode(" ", $v)."\n";
		}
	}

	echo "0 : {}\n};\n";

	#print_r($areas[1519]);
exit;



	function parse_dbc($file, $string_fields=array(), $id_idx=1){

		$fh = fopen($file, 'r');
		$sig = fread($fh, 4);

		$records = read_int($fh);
		$fields = read_int($fh);
		$record_size = read_int($fh);
		$strings_size = read_int($fh);

		if ($fields * 4 != $record_size){
			die("unexpected field size! ($fields fields = $record_size bytes)");
		}

		$rows = array();
		for ($i=0; $i<$records; $i++){
			$row = array();
			for ($j=0; $j<$fields; $j++){
				$row[$j+1] = read_int($fh);
			}
			if ($id_idx){
				$rows[$row[$id_idx]] = $row;
			}else{
				$rows[] = $row;
			}
		}

		$string_data = fread($fh, $strings_size);

		foreach ($rows as &$row){
			foreach ($string_fields as $f){
				$p = $row[$f];
				if ($p >= $strings_size){
					$row[$f] = "LOC? ($p)";
				}else{
					$idx = strpos($string_data, "\0", $p);
					if ($idx !== false){
						$row[$f] = substr($string_data, $p, $idx-$p);
					}else{
						$row[$f] = "OVER ($p)";
					}
				}
			}
		}

		return $rows;
	}




	function read_int($fh){
		$data = fread($fh, 4);
		list($junk, $n) = unpack('V', $data);
		return $n;
	}
