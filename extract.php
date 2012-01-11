<?
	$patches	= array(13164, 13205, 13287, 13329, 13596, 13623);
	$base_patches	= array(13914, 14007, 14333, 14480, 14545, 14946, 15005, 15050);

	$extractor	= '/root/Kanma-MPQExtractor-d909eec/build/bin/MPQExtractor';
	$extractor	= '/root/git-projects/MPQExtractor/build/bin/MPQExtractor';


	#
	# transform patch lists
	#

	$all_patches = array();

	foreach ($patches	as $v) $all_patches[] = array($v, "mpqs/wow-update-{$v}.MPQ,base");
	foreach ($base_patches	as $v) $all_patches[] = array($v, "mpqs/wow-update-base-{$v}.MPQ");

	usort($all_patches, 'sort_patches');
	function sort_patches($a, $b){
		return $a[0]-$b[0];
	}

	$patch_list = array();
	foreach ($all_patches as $p) $patch_list[] = $p[1];
	$patch_list = implode(' ', $patch_list);


	#
	# extract stuff!
	#

	extract_files("World\\Minimaps\\*", 'mpqs/art.MPQ');
	




	function extract_files($path, $base_mpq){

		global $patch_list;
		global $extractor;

		passthru("$extractor -e \"base\\$path\" -f -p $patch_list -o out $base_mpq");
		passthru("$extractor -e \"$path\" -f -p $patch_list -o out $base_mpq");
	}
