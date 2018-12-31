<?
	# this is my shape:
	# XXX
	# XX0
	# 0XX

	$squares = array(
		array(1,1), /* array(2,1), */ array(3,1),
		array(1,2), array(2,2),
		array(2,3), array(3,3),
	);


#function squares_into_shape($squares){

	# turn it into a list of vectors
	$vectors = array();
	foreach ($squares as $s){
		$x0 = $s[0];
		$y0 = $s[1];
		$x1 = $x0 + 1;
		$y1 = $y0 + 1;
		$vectors["{$x0}_{$y0},{$x1}_{$y0}"] = 1;
		$vectors["{$x1}_{$y0},{$x1}_{$y1}"] = 1;
		$vectors["{$x1}_{$y1},{$x0}_{$y1}"] = 1;
		$vectors["{$x0}_{$y1},{$x0}_{$y0}"] = 1;
	}

	# reduce reversed vectors
	foreach (array_keys($vectors) as $v){
		list($a,$b) = explode(',', $v);
		if ($vectors["$b,$a"]){
			unset($vectors["$b,$a"]);
			unset($vectors[$v]);
			echo '.';
		}
	}

	# reduce sequential vectors
	foreach (array_keys($vectors) as $v){

		list($a,$b) = explode(',', $v);
		list($x0,$y0) = explode('_', $a);
		list($x1,$y1) = explode('_', $b);

		$xd = $x1-$x0;
		$yd = $y1-$y0;

		$x = $x1;
		$y = $y1;

		while (1){
			$x2 = $x + $xd;
			$y2 = $y + $yd;
			$key = "{$x}_{$y},{$x2}_{$y2}";
			if (!$vectors[$key]) break;
			unset($vectors[$key]);
			$x = $x2;
			$y = $y2;
		}

		if ($x != $x1 || $y != $y1){
			unset($vectors[$v]);
			$vectors["{$x0}_{$y0},{$x}_{$y}"] = 1;
		}
	}

	# turn vectors into edges
	$edges = array();
	foreach (array_keys($vectors) as $v){
		list($a,$b) = explode(',', $v);
		$edges[$a] = $b;
	}


$num = count($vectors);
echo "\ndown to $num vecs\n";

print_r($edges);
