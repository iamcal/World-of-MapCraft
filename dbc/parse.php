<?

$areas = parse_dbc('AreaTable.dbc', array(12), 1);

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


print_r($areas[1519]);
exit;

foreach ($areas as $row){
	if ($row[1] == 1519){
		echo "$row[1] : $row[12] ($row[3])\n";
	}
	if ($row[3] == 1519){
		echo "$row[1] : $row[12]\n";
	}
}
exit;

#$wm_areas = parse_dbc('WorldMapArea.bdc', array(4), 1);

$x = parse_dbc('WorldMapOverlay.dbc', array(9));

foreach (array_slice($x, 0, 2) as $row){

	$row['area'] = $areas[$row[3]];
	#$row['wm_area'] = $wm_areas[$row[2]];
	print_r($row);
}

#print_r(array_slice($x, 0, 10));
exit;

#$w = parse_dbc('WMOAreaTable.dbc');
#print_r($w);
#foreach ($w as $row) if ($row[1] == 617) print_r($row);
#exit;

#$map = parse_dbc('Map.dbc', array(2), 1);
#print_r($map);
#print_r($map[617]);
#print_r($map[571]);
#exit;

$areas =  parse_dbc('AreaTable.dbc', array(12), 1);
print_r($areas);
exit;

foreach ($areas as $row){
	if (preg_match('!^Dalaran!', $row[12])) print_r($row);
}
#print_r($areas);
exit;

	$aa = parse_dbc('AreaAssignment.dbc', array(), 1);

	$dm = parse_dbc('DungeonMap.dbc', array(), 1);
	$dmc = parse_dbc('DungeonMapChunk.dbc', array(), 1);

	#print_r($aa);

	#foreach ($aa as $row){
	#	if ($row[3] == 2437) print_r($row);
	#}

	#foreach ($dm as $row){
	#	if ($row[2] == 389) print_r($row);
	#}

	#foreach ($dmc as $row){
	#	if ($row[2] == 389) print_r($row);
	#}



	print_r($map[389]);
	#print_r($areas[2437]);





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
