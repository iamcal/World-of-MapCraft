<?
	include('config.php');


if (0){
	init_set('inst_rfc', 880, 800, 'black');

	comp_set('inst_rfc', 'WMO_Dungeon_KL_OrgrimmarLavaDungeon/LavaDungeon_011_00_00.png', 0, 0);
	comp_set('inst_rfc', 'WMO_Dungeon_KL_OrgrimmarLavaDungeon/LavaDungeon_001_00_00.png', 167, 86);
	comp_set('inst_rfc', 'WMO_Dungeon_KL_OrgrimmarLavaDungeon/LavaDungeon_001_00_01.png', 167, 86-256);
	comp_set('inst_rfc', 'WMO_Dungeon_KL_OrgrimmarLavaDungeon/LavaDungeon_001_01_00.png', 167+256, 86);
	comp_set('inst_rfc', 'WMO_Dungeon_KL_OrgrimmarLavaDungeon/LavaDungeon_001_01_01.png', 167+256, 86-256);
	comp_set('inst_rfc', 'WMO_Dungeon_KL_OrgrimmarLavaDungeon/LavaDungeon_002_00_00.png', 31, 202);
	comp_set('inst_rfc', 'WMO_Dungeon_KL_OrgrimmarLavaDungeon/LavaDungeon_000_00_00.png', 236, 311);
	comp_set('inst_rfc', 'WMO_Dungeon_KL_OrgrimmarLavaDungeon/LavaDungeon_004_00_01.png', 236+120, 260);
	comp_set('inst_rfc', 'WMO_Dungeon_KL_OrgrimmarLavaDungeon/LavaDungeon_004_01_01.png', 236+120+256, 260);
	comp_set('inst_rfc', 'WMO_Dungeon_KL_OrgrimmarLavaDungeon/LavaDungeon_004_00_00.png', 236+120, 260+256);
	comp_set('inst_rfc', 'WMO_Dungeon_KL_OrgrimmarLavaDungeon/LavaDungeon_004_01_00.png', 236+120+256, 260+256);
	comp_set('inst_rfc', 'WMO_Dungeon_KL_OrgrimmarLavaDungeon/LavaDungeon_003_00_00.png', 236+120+204+100, 260+256+19);
	comp_set('inst_rfc', 'WMO_Dungeon_KL_OrgrimmarLavaDungeon/LavaDungeon_003_00_01.png', 236+120+204+100, 260+19);
}
if (1){
	init_set('inst_mgt', 1000, 1000, 'blue');

	comp_set('inst_mgt', 'WMO_Dungeon_QT_Sunwell_5Man/Sunwell_5Man_003_00_00.png', 256, 256);
	comp_set('inst_mgt', 'WMO_Dungeon_QT_Sunwell_5Man/Sunwell_5Man_003_01_00.png', 512, 256);
	comp_set('inst_mgt', 'WMO_Dungeon_QT_Sunwell_5Man/Sunwell_5Man_003_00_01.png', 256, 0);
	comp_set('inst_mgt', 'WMO_Dungeon_QT_Sunwell_5Man/Sunwell_5Man_003_01_01.png', 512, 0);
}



	function comp_set($set_name, $src, $x, $y){

		global $flats, $pngs;

		$src = "$pngs/$src";
		$dst = "$flats/{$set_name}.png";

		$x = $x >= 0 ? "+$x" : $x;
		$y = $y >= 0 ? "+$y" : $y;

		$cmd = "composite $src -geometry {$x}{$y} $dst $dst";
		#echo "$cmd\n";
		echo shell_exec($cmd);
	}

	function init_set($set_name, $w, $h, $color){
		global $flats;
		$dst = "$flats/{$set_name}.png";

		echo shell_exec("convert xc:$color -geometry !{$w}x{$h} $dst");
	}

	echo "\ndone\n";
