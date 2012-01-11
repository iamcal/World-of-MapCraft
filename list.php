<?
	$list = glob("mpqs/*.MPQ");

	foreach ($list as $mpq){
		list($folder, $file) = explode('/', $mpq);
		list($base, $ext) = explode('.', $file);
		$cmd = "/root/git-projects/MPQExtractor/build/bin/MPQExtractor -l lists/$base.txt $mpq";
		passthru($cmd);
	}
