<?
	include('../build/config.php');

	#build_wmo_map('dungeon/az_karazahn', 'karazhan');

	$kara_1 = array(
		32,45,64,
		21,33,
	);
	$kara_2 = array(
		3,4,5, # dance floors
		45,
		41,46,
	);
	$kara_3 = array(
		4,5, # dance floors

		6, # the stage
		16, # coridoor under stage?

		14,15,2, # dance floor coridoor
		34,35,36,37,38,39,63, # maiden

		60,66,
		10,12,
	);

	$kara_3b = array(
		40, # spiral coridoor up from stage
		6, # the stage
		7,30, # blue passages from stage
		10,11,12,
		8,
	);

		#49, # big crazy top rooms
		#55, # crazy big thing

	$kara_4 = array(
		#8,9,10,
		9,
		61,31,48,62,

		50,51, # illhoof

	#	49, # big room base
	);

	$kara_5 = array(
		44,
		47, # shade of aran

		52, # illhoof coridoor (50 is the coridoor)
		43,

	#	49, # big room base
	);

	$kara_6 = array(

		13, # chess room
		17,19,58, # room after chess

		65,42,53, # netherspite
		52,43,

	#	49, # big room base
	);

	$kara_7 = array(
		56,54,57,20,		#lvl 7
		19,
	);

	$kara_8 = array(
		18,			#lvl 8
		19,
	);

	$kara_9 = array(
		19,
		22,			#lvl 9
		23,27,28,24,25,26,29,
	);

	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', $kara_1, array(), 'kharazan_instance_floor1');
	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', $kara_2, array(), 'kharazan_instance_floor2');
	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', $kara_3, array(), 'kharazan_instance_floor3');
	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', $kara_3b, array(), 'kharazan_instance_floor3b');
	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', $kara_4, array(), 'kharazan_instance_floor4');
	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', $kara_5, array(), 'kharazan_instance_floor5');
	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', $kara_6, array(), 'kharazan_instance_floor6');
	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', $kara_7, array(), 'kharazan_instance_floor7');
	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', $kara_8, array(), 'kharazan_instance_floor8');
	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', $kara_9, array(), 'kharazan_instance_floor9');

	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', array(55), array(), 'kharazan_instance_top');

	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', array(49), array(), 'kharazan_instance_floor4_base');
	#cut_wmo_map('kharazan_instance_floor4_base', array(
	#	array(0,0, 1024,245),
	#	array(0,687, 1024,1024),
	#	array(0,0, 241,1024),
	#	array(735,0, 1024,1024),
	#	array(580,233, 230,202),
	#	array(206,526, 150,175),
	#	array(356,610, 83,78),
	#	array(439,648, 26, 40),
	#	array(640,652, 111,53),
	#	array(214,346, 114,110),
	#	array(222,233, 136,77),
	#	array(229,306, 54,62),
	#));

	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', array(49), array(), 'kharazan_instance_floor5_base');
	#cut_wmo_map('kharazan_instance_floor5_base', array(
	#	array(0,0,1024,228), # top
	#	array(466,190, 95,165),
	#	array(0,0,446,386),
	#	array(752,0, 400,1024),
	#	array(0,583,650,500),
	#	array(0,0,279,1024),
	#	array(308,415,272,137),
	#	array(460,384,120,40),
	#	array(580,433,95,90),
	#	array(704,433,62,89),
	#	array(644,641, 116,337),
	#	array(433,509, 217,93),
	#	array(614,502, 46,57),
	#	array(614,597, 46,57),
	#));

	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', array(49), array(), 'kharazan_instance_floor6_base');
	#cut_wmo_map('kharazan_instance_floor6_base', array(
	#	array(0,0,1024,223),
	#	array(0,0,221,1024),
	#	array(436,0,1024,1024),
	#	array(0,610,1024,400),
	#	array(195,303,63,137),
	#	array(308,303,128,250),
	#	array(191,436,88,182),
	#	array(383,220,63,92),
	#));
	
	#build_wmo_map('dungeon/az_karazahn', 'kharazan_instance', $kara_7, array(), 'kharazan_instance_floor7', 'kara');

	#build_wmo_map('Dungeon/KL_OrgrimmarLavaDungeon', 'LavaDungeon');

	# the outside part
	#build_wmo_map('Dungeon/AZ_Deadmines', 'AZ_Deadmines_A', array(), array(), '', 2);
	# the inside part, but dupes some stuff from A (36-39) and the odd back door (17)
	#build_wmo_map('Dungeon/AZ_Deadmines', 'AZ_Deadmines_B', array(), array(36,37,38,39,17), '', 2);

	#build_wmo_map('Dungeon/AZ_Deadmines', 'AZ_Deadmines_C');
	#build_wmo_map('Dungeon/AZ_Deadmines', 'AZ_Deadmines_D');

	#build_wmo_map('Dungeon/AZ_StormwindPrisons', 'StormwindPrison');
	#build_wmo_map('Dungeon/AZ_StormwindPrisons', 'StormwindJail');
	#build_wmo_map('Dungeon/AZ_Subway', 'Subway');

	#build_wmo_map('Dungeon/KL_Wailing', 'wailingcaverns');
	#build_wmo_map('Dungeon/KL_Wailing', 'wailingcaverns_instance');

	#build_wmo_map('Dungeon/KL_Blackfathom', 'Blackfathom');
	#build_wmo_map('Dungeon/KL_Blackfathom', 'Blackfathom_instance');

	#build_wmo_map('Dungeon/KZ_Gnomeragon', 'KZ_Gnomeragon_Instance');

	#build_wmo_map('Dungeon/LD_ScarletMonestary' ,'Monestary_Cathedral');
	#build_wmo_map('Dungeon/LD_ScarletMonestary' ,'Monestary_Cemetery');
	#build_wmo_map('Dungeon/LD_ScarletMonestary' ,'Monestary_Library');
	#build_wmo_map('Dungeon/LD_ScarletMonestary' ,'Monestary_War');

	#build_wmo_map('Dungeon/KL_Razorfen', 'RazorfenDowns_instance');
	#build_wmo_map('Dungeon/KL_Razorfen', 'RazorfenKraul_instance');

	#build_wmo_map('Dungeon/KL_Maraudon', 'KL_Maraudon');
	#build_wmo_map('Dungeon/KL_Maraudon', 'KL_Maraudon_instance01');

	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman');
	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman_A');
	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman_B');
	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman_C');
	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman_Unearthed');

	#build_wmo_map('Dungeon/KL_DireMaul', 'KL_Diremaul');
	#build_wmo_map('Dungeon/KL_DireMaul', 'KL_Diremaul_Instance');
	#build_wmo_map('Dungeon/KL_DireMaul', 'KL_Diremaul__BackEnt');

	#build_wmo_map('Dungeon/LD_Stratholme', 'FrostWyrm_Final01');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme_A');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme_B');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme_C');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme_raid');

	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock2');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_lower_guild');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_lower_instance');

	$bwl_floor_1 = array(
		6, # entry ramp
		7, # razorgore
		8, # ramp from raz to val
		9, # val
		10, # ramp to suppression
		22,
	);

	$bwl_floor_2 = array(
		12,
		11, # upper something
		15,16, # lower dragons
	);

	$bwl_floor_3 = array(
		0, # nef
		19,20,21, # chromagnus
		17,18, # upper dragons
	);

	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', $bwl_floor_1, array(), 'blackrock_upper_guild_floor_1');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', $bwl_floor_2, array(), 'blackrock_upper_guild_floor_2');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', $bwl_floor_3, array(), 'blackrock_upper_guild_floor_3');

	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(0), array(), 'Blackrock_upper_guild_0');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(1), array(), 'Blackrock_upper_guild_1');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(2), array(), 'Blackrock_upper_guild_2');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(3), array(), 'Blackrock_upper_guild_3');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(4), array(), 'Blackrock_upper_guild_4');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(5), array(), 'Blackrock_upper_guild_5');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(6), array(), 'Blackrock_upper_guild_6');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(7), array(), 'Blackrock_upper_guild_7');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(8), array(), 'Blackrock_upper_guild_8');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(9), array(), 'Blackrock_upper_guild_9');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(10), array(), 'Blackrock_upper_guild_10');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(11), array(), 'Blackrock_upper_guild_11');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(12), array(), 'Blackrock_upper_guild_12');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(13), array(), 'Blackrock_upper_guild_13');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(14), array(), 'Blackrock_upper_guild_14');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(15), array(), 'Blackrock_upper_guild_15');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(16), array(), 'Blackrock_upper_guild_16');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(17), array(), 'Blackrock_upper_guild_17');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(18), array(), 'Blackrock_upper_guild_18');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(19), array(), 'Blackrock_upper_guild_19');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(20), array(), 'Blackrock_upper_guild_20');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(21), array(), 'Blackrock_upper_guild_21');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild', array(22), array(), 'Blackrock_upper_guild_22');

	$lbrs_lower = array(
		#66,68,	# forlorn span, outside

		34, # bottom floor
		37,38, # smolder web
		41,42, # big room with ramps
		39,40,43, # war master room
	);

	$lbrs_upper = array(

		36, # top floor
		45,46,47, # floor at top of ramps

		61,48,52,53,49, # lbrs floor 2
		69,50,62,
	
		44, # upper passage
		54,55, # upper chamber
		#59, # lbrs floor 3

		11,0,2,3,4, # lrbs entrance cavern
		5,6, # lbrs transition rooms
	);

	$brs_entrance = array(

		7,8,9, # the entrance hall
		67,1, # portal
		12,13,32, # bottom side rooms
	);

	$ubrs_lower = array(

		10, # ramp from entrance hall
		33, # ubrs lobby

		14,15,22, # ubrs pyro ramp
		16, #pyromancer's room
	);

	$ubrs_upper = array(

		20,21, # rookery?
		18,19,17, #rookery upper deck

		28, # ubrs after rend?
		64, # rend's room
		23, # cave just before rend
		30,31, # between rend & beast
		24,25, # long way to rend
		29,35,26,27, # passages after rend
		60, # beast lobby
		63, # beast
		56,57,58, # drak's room

		65, # bwl entrance
		#51, # bwl
	);

	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_instance');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_instance', array_merge($brs_entrance, $lbrs_lower, $lbrs_upper), array(), 'lbrs_upper');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_instance', $lbrs_lower, array(), 'lbrs_lower');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_instance', array_merge($brs_entrance, $ubrs_lower), array(), 'ubrs_lower');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_instance', $ubrs_upper, array(), 'ubrs_upper');

	$st_lower = array(
		101,	# bottom middle
		3,4,5,6,7,8,9,10,11,12,13,14,27, # outer ring
		28,29,30,	# bottom side rooms
		37,38,39,40,41,42,43,44,45,46,47,71, # connecting ring to middle
		116,117,118,119, # stairs up
		66,73,78,83,	# ramps
		104,105, # vertical coridoor
		120,121	# entrance
	);

	#build_wmo_map('Dungeon/SunkenTemple', 'AZ_SunkenTemple');
	#build_wmo_map('Dungeon/SunkenTemple', 'AZ_SunkenTemple_Instance', array(), $st_lower);
	#build_wmo_map('Dungeon/SunkenTemple', 'AZ_SunkenTemple_Instance', $st_lower, array(), 'AZ_SunkenTemple_Instance_lower');

	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFang');

	$sfk1 = array(
		75,39,74,19,62,59,60,38,15,2,72, # ground floor
		61,16,14,20,13,17,1, # first floor
		22,23,30,12,11,7,6,37,35,36,
		63,21,24,25,26,27,28,29,31,34,
		3,4,5,64,65,66,32,33,
	);

	$sfk2a = array(
		18,67,68,69,70, # floor 2 near entrance
	);

	$sfk2b = array(
		71,10,9,0,8, # floor 2 at top		
	);

	$sfk3 = array(
		44,45,46,73,42,42,41,56,47,48,49,50,51,	# floor 3
	);

	$sfk4 = array(
		40,52,53,57,54,55,58, # floor 4
	);

	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFangInterior', $sfk1,  array(), 'LD_ShadowFangInterior_1',  0);
	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFangInterior', $sfk2a, array(), 'LD_ShadowFangInterior_2a', 0);
	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFangInterior', $sfk2b, array(), 'LD_ShadowFangInterior_2b', 0);
	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFangInterior', $sfk3,  array(), 'LD_ShadowFangInterior_3',  0);
	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFangInterior', $sfk4,  array(), 'LD_ShadowFangInterior_4',  0);

	$cthun = array(1,2,23,24,25,26,30,31,32,34);
	$junk_over = array(
		22,42, # misc facade
		33, # brain?
		44, # random coridoor
	); # 21&37 are needed :(

	#build_wmo_map('Dungeon/KL_AhnQiraj', 'Ahn_Qiraj_facade');
	#build_wmo_map('Dungeon/KL_AhnQiraj', 'Ahn_Qiraj', array(), array_merge($cthun, $junk_over));
	#build_wmo_map('Dungeon/KL_AhnQiraj', 'Ahn_Qiraj', $cthun, array(), 'Ahn_Qiraj__cthun');

	#build_wmo_map('Dungeon/KL_OnyxiasLair', 'KL_OnyxiasLair');
	#build_wmo_map('Dungeon/KL_OnyxiasLair', 'KL_OnyxiasLair_A');
	#build_wmo_map('Dungeon/KL_OnyxiasLair', 'KL_OnyxiasLair_B');

	#build_wmo_map('Dungeon/QT_Sunwell_5Man', 'Sunwell_5Man');
	#build_wmo_map('Dungeon/QT_Sunwell', 'Sunwell', array(), array(), '', 2);
	#build_wmo_map('Dungeon/QT_sunwell_facades', 'sunwell_magister_facade');
	#build_wmo_map('Dungeon/QT_sunwell_facades', 'sunwell_raid_facade');

	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_Draenei');
	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_Marsh');
	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_Pumping');
	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_Raid');
	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_zangarentrance');

	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple');

	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(25,26,27,28,29,35,45), array(), 'blacktemple_sewer', 2);
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(12,13,34,9), array(), 'blacktemple_floor_1', 2);

	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(34,9, 20,22,17,41,42,43,44,16, 15,17,11), array(), 'blacktemple_floor_2', 2);
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(10,32,33,36,37,14), array(), 'blacktemple_floor_3a', 2); # gorefiend coridoor

	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(31,18,6), array(), 'blacktemple_floor_3', 2); # gorefiend
	#cut_wmo_map('blacktemple_floor_3', array(
	#	array(0,0,303,386),
	#	array(801,0,480,398),
	#	array(675,0,140,257),
	#	array(675,323,140,100),
	#));

	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(4,7,19,21,0,8,23,1,30), array(), 'blacktemple_floor_4', 2); #ledges
	#cut_wmo_map('blacktemple_floor_4', array(
	#	array(0,0,304,206),
	#	array(1116,0,163,230),
	#	array(315,605,146,395),
	#	array(284,252,70,67),
	#	array(171,413,181,75),
	#));

	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(2,30), array(), 'blacktemple_floor_5',2 ); #illidan

	# gorefiend = 31,18
	# ledge = 4,6,7,19,21,0,8,23,1,30
	#

	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(0), array(), 'blacktemple_0');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(1), array(), 'blacktemple_1');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(2), array(), 'blacktemple_2');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(4), array(), 'blacktemple_4');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(6), array(), 'blacktemple_6');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(7), array(), 'blacktemple_7');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(8), array(), 'blacktemple_8');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(9), array(), 'blacktemple_9');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(10), array(), 'blacktemple_10');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(12), array(), 'blacktemple_12');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(13), array(), 'blacktemple_13');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(14), array(), 'blacktemple_14');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(15), array(), 'blacktemple_15');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(16), array(), 'blacktemple_16');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(17), array(), 'blacktemple_17');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(18), array(), 'blacktemple_18');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(19), array(), 'blacktemple_19');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(20), array(), 'blacktemple_20');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(21), array(), 'blacktemple_21');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(22), array(), 'blacktemple_22');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(23), array(), 'blacktemple_23');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(25), array(), 'blacktemple_25');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(26), array(), 'blacktemple_26');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(27), array(), 'blacktemple_27');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(28), array(), 'blacktemple_28');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(29), array(), 'blacktemple_29');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(30), array(), 'blacktemple_30');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(31), array(), 'blacktemple_31');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(32), array(), 'blacktemple_32');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(33), array(), 'blacktemple_33');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(34), array(), 'blacktemple_34');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(35), array(), 'blacktemple_35');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(36), array(), 'blacktemple_36');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(37), array(), 'blacktemple_37');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(41), array(), 'blacktemple_41');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(42), array(), 'blacktemple_42');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(43), array(), 'blacktemple_43');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(44), array(), 'blacktemple_44');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(45), array(), 'blacktemple_45');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple', array(47), array(), 'blacktemple_47');

	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple_entrance');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple_facade');
	#build_wmo_map('Dungeon/Blacktemple', 'ShadowMoon_BattlementLeft');
	#build_wmo_map('Dungeon/Blacktemple', 'ShadowMoon_BattlementWall01');
	#build_wmo_map('Dungeon/Blacktemple', 'ShadowMoon_Battlementright');
	#build_wmo_map('Dungeon/Blacktemple', 'ShadowMoon_Wall_crack');

	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Arcane');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Atrium');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Exterior');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Exterior_smallwing');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Exterior_smallwing_Arcane');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Exterior_smallwing_Factory');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Factory');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Raid');

	#build_wmo_map('Dungeon/Hellfire', 'Hellfire_Citadel');
	#build_wmo_map('Dungeon/Hellfire', 'Hellfire_Military');
	#build_wmo_map('Dungeon/Hellfire', 'Hellfire_raid');
	#build_wmo_map('Dungeon/Hellfire', 'Hellfire_ramparts', array(), array(), '', 2);
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_DemonWing');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_wall01');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_wall02');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_wall03');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_wall04');

	#build_wmo_map('Dungeon/OL_GronnRaid', 'Gronnraid');
	#build_wmo_map('Dungeon/OL_GronnRaid', 'Gronnraid_facade');

	#build_wmo_map('Dungeon/OL_Auchindoun', 'Auchindoun_Enterance');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'Draenei_wing');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'OL_Crypt');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'demon_wing');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'ethereal_wing');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'shadow_council_wing');

	#build_wmo_map('Dungeon/Azjol_Lowercity', 'Azjol_LowerCityRoof');
	#build_wmo_map('Dungeon/Azjol_Lowercity', 'Azjol_Lowercity');
	#build_wmo_map('Dungeon/Azjol_Uppercity', 'Azjol_Uppercity');

	#build_wmo_map('Dungeon/BlackRockV2', 'BlackrockV2', array(), array(8));
	#build_wmo_map('Dungeon/BlackWingV2', 'BlackwingV2');

	#build_wmo_map('Dungeon/Deepholm', 'Deepholm');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholm_TroggTown');
	#build_wmo_map('Dungeon/Deepholm', 'DeepholmeExt');
	#build_wmo_map('Dungeon/Deepholm', 'DeepholmeExt_Lit');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillarbase01');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillarbase02');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillarbase03');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillartop01');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillartop02');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillartop03');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_towerpiece');

	#build_wmo_map('Dungeon/DrakTharon', 'DrakTharon');
	#build_wmo_map('Dungeon/DrakTharon', 'DrakTharonRuined');
	#build_wmo_map('Dungeon/DrakTharon', 'DrakTharonTower');
	#build_wmo_map('Dungeon/DrakTharon', 'DrakTharon_TowerA');
	#build_wmo_map('Dungeon/DrakTharon', 'DrakTharon_TowerB');

	#build_wmo_map('Dungeon/Gjalerbron', 'Gjalerbron');

	#build_wmo_map('Dungeon/GrimBatol', 'KZ_GrimBatol');
	#build_wmo_map('Dungeon/GrimBatol', 'KZ_GrimBatol_raid');

	#build_wmo_map('Dungeon/Grizzlemaw', 'Grizzlemaw');
	#build_wmo_map('Dungeon/Grizzlemaw', 'GrizzlemawTermiteDen');

	#build_wmo_map('Dungeon/IceCrownRaid', 'IceCrownRaid');
	#build_wmo_map('Dungeon/IceCrownRaid', 'IceCrownRaid_arthas_precipice');
	#build_wmo_map('Dungeon/IceCrownRaid', 'IceCrownRaid_frostmourne');
	#build_wmo_map('Dungeon/IceCrownRaid', 'IceCrownRaid_middle_section');
	#build_wmo_map('Dungeon/IceCrownRaid', 'Icecrown_Portal_Exterior');
	#build_wmo_map('Dungeon/IceCrownRaid', 'icecrown_elevator02_transport');

	#build_wmo_map('Dungeon/IceCrown_dungeon', 'Icecrown_Dungeon_exteriorMicro');
	#build_wmo_map('Dungeon/IceCrown_dungeon', 'Icecrown_Halls_of_reflection');
	#build_wmo_map('Dungeon/IceCrown_dungeon', 'Icecrown_dungeon');
	#build_wmo_map('Dungeon/IceCrown_dungeon', 'PitOfSaronKrickArea');

	#build_wmo_map('Dungeon/LD_DragonIsles', 'DragonIsles_A');
	#build_wmo_map('Dungeon/LD_DragonIsles', 'DragonIsles_B');
	#build_wmo_map('Dungeon/LD_DragonIsles', 'DragonIsles_C');
	#build_wmo_map('Dungeon/LD_DragonIsles', 'DragonIsles_D');

	#build_wmo_map('Dungeon/RubySanctum', 'ND_Ruby_Collision');

	#build_wmo_map('Dungeon/Thor_Modan', 'Thor_Modan');

	#build_wmo_map('Dungeon/Ulduar', 'UL_Detail_01');
	#build_wmo_map('Dungeon/Ulduar', 'UL_Dragonroost');
	#build_wmo_map('Dungeon/Ulduar', 'UlduarRaidCourtyard_Blockout');
	#build_wmo_map('Dungeon/Ulduar', 'UlduarTramArchitecture');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Arch01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Arch01D');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Arch02');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Arch02D');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Bridge01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Building01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Building01D');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_DetailFacades_01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Ext01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Ext02');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Ext03');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Ext04');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Forge');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Raid');

	$ulduar_mimiron = array(
		32, # main room
		#37,39, # the wrong end
		41,42,43,44, # main coridoor
		17, # small bridge
	);

	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Raid', array(33,34,35,36,46), array(), 'Ulduar_Raid_lower', 3);
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Raid', $ulduar_mimiron, array(), 'Ulduar_Raid_mimiron', 3);
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Raid', array(), array_merge(array(34,35,46), $ulduar_mimiron), 'Ulduar_Raid_main', 3);

	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Ramp01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Tower01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Tower01C');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Tower01D');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall02');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall03');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall04');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall05');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall06');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall07');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall08');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_dwarf77');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_irongiant80', array(), array(), '', 2);

	#build_wmo_map('Dungeon/Uldum', 'Uldum_Dungeon_Collision');
	#build_wmo_map('Dungeon/Uldum', 'Uldum_Interior');
	#build_wmo_map('Dungeon/Uldum', 'Uldum_Interior_Pyramid');

	$uldum_hoo_1 = array(
		0,7,5,6,14,23,25,28,22,27,24,26,29,13,
	);

	$uldum_hoo_2 = array(
		2,3,17,19,20,10,18,21,
		#11, # not needed
		#8, # not used
		#30,
		#4, # big top chamber
		#9, # entrance
		12,
		15,
		16,
		#1, # sand zone
	);

	#build_wmo_map('Dungeon/Uldum', 'Uldum_Interior', $uldum_hoo_1, array(), 'uldum_hoo_1');
	#build_wmo_map('Dungeon/Uldum', 'Uldum_Interior', $uldum_hoo_2, array(), 'uldum_hoo_2');
	#build_wmo_map('Dungeon/Uldum', 'Uldum_Interior', array(1), array(), 'uldum_hoo_3');
	#build_wmo_map('Dungeon/Uldum', 'Uldum_Interior', array(4), array(), 'uldum_hoo_4');
	#build_wmo_map('Dungeon/Uldum', 'Uldum_Interior', array(9), array(), 'uldum_hoo_5');
	#build_wmo_map('Dungeon/Uldum', 'Uldum_Interior', array(30), array(), 'uldum_hoo_6');
	build_wmo_map('Dungeon/Uldum', 'Uldum_Interior', array(11,8), array(), 'uldum_hoo_7');

	#cut_wmo_map('uldum_hoo_2', array(
	#	array(288,1146,61,61),
	#	array(427,1031,53,40),
	#	array(429,1170,55,40),
	#	array(769,1291,44,43),
	#	array(630,1290,43,47),
	#	array(748,1415,61,62),
	#	array(183,1916,42,46),
	#	array(44,1914,43,45),
	#	array(45,2040,63,67),
	#	array(329,1925,67,62),
	#	array(350,2067,40,43),
	#	array(214,2065,40,47),
	#	array(1022,1027,137,42),
	#	array(1018,1170,141,48),
	#	array(929,1170,41,38),
	#	array(931,1030,39,40),
	#));

	#cut_wmo_map('uldum_hoo_3', array(
	#	array(98,0,200,96),
	#	array(106,277,162,101),
	#));

	#cut_wmo_map('uldum_hoo_4', array(
	#	array(0,0,270,768),
	#	array(922,0,350,768),
	#));

	#cut_wmo_map('uldum_hoo_5', array(
	#	array(0,142,145,450),
	#	array(474,161,166,430),
	#	array(394,292,90,350),
	#	array(141,292,79,290),
	#	array(380,336,17,315),
	#	array(219,336,19,280),
	#	array(176,0,32,52),
	#	array(410,0,36,52),
	#));
	
exit;


	#build_wmo_map('Dungeon/Valgarde', 'IC_VrykulTunnel01');
	#build_wmo_map('Dungeon/Valgarde', 'Valgarde');

	$uk_lower = array(
		0,
		1,2,
		5,
		10,11,12,13,14,
		#15,
		16,
	);

	$uk_upper = array(
		3,4,6,9,#15,
		5,
		7,8,
	);

	#build_wmo_map('Dungeon/Valgarde', 'Valgarde_70GW', $uk_lower, array(), 'inst_uk_lower');
	#build_wmo_map('Dungeon/Valgarde', 'Valgarde_70GW', $uk_upper, array(), 'inst_uk_upper');
	#build_wmo_map('Dungeon/Valgarde', 'Valgarde_80GW', array(), array(), '', 0);

	#build_wmo_map('Dungeon/Valgarde', 'Valgarde_IC');
	#build_wmo_map('Dungeon/Valgarde', 'Valgarde_IC_LOW');

	#build_wmo_map('Dungeon/Wintergrasp', 'Wintergrasp_Raid');

	#build_wmo_map('Dungeon/ND_ArugalsTower', 'Arugals_Tower01');
	#build_wmo_map('Dungeon/ND_ChamberRed', 'nd_chamberred_portal_Broken');
	#build_wmo_map('Dungeon/ND_Chamberblack', 'ND_ChamberBlack_Portal');
	#build_wmo_map('Dungeon/ND_Chamberblack', 'ND_Chamberblack_Collision');
	#build_wmo_map('Dungeon/ND_DalaranPrison', 'DalaranPrison');
	#build_wmo_map('Dungeon/ND_DrakTharon72', 'DrakTharon_72_Wing');
	#build_wmo_map('Dungeon/ND_GunDrak', 'GunDrak');
	#build_wmo_map('Dungeon/ND_GunDrak', 'GunDrakInterior');
	#build_wmo_map('Dungeon/ND_GunDrak', 'GunDrak_Entrance');
	#build_wmo_map('Dungeon/ND_GunDrak', 'GundrakGrate');
	#build_wmo_map('Dungeon/ND_Necropolis', 'DeathknightNecropolis');
	#build_wmo_map('Dungeon/ND_Necropolis', 'ND_Necropolis01');
	#build_wmo_map('Dungeon/ND_Necropolis', 'ND_NecropolisCollision');
	#build_wmo_map('Dungeon/ND_Necropolis', 'ND_NecropolisTeleport01');
	#build_wmo_map('Dungeon/ND_Necropolis', 'ND_NecropolisTeleport02');
	#build_wmo_map('Dungeon/ND_NerubianMicros', 'ND_NerubianEntrance01');
	#build_wmo_map('Dungeon/ND_Sholazar_Geodemicro', 'ND_Sholazar_Geodemicro_final');
	#build_wmo_map('Dungeon/ND_Stratholme', 'CoT_Stratholme_Exterior_Collision');
	#build_wmo_map('Dungeon/ND_Stratholme', 'Stratholme_Past');
	#build_wmo_map('Dungeon/ND_TitanMicros', 'ND_TitanOverlook03');
	#build_wmo_map('Dungeon/ND_VrykulMicros', 'SP_VrykulTunnel01');
	#build_wmo_map('Dungeon/ND_VrykulMicros', 'SP_VrykulTunnel02');
	#build_wmo_map('Dungeon/ND_VrykulMicros', 'VR_Icecrown_Micro01');

	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_LOW');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_Building_01');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_Building_01_LOW');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_Building_02');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_Building_02_LOW');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_Building_03');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_Building_03_LOW');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Raid');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Raid_Entrance');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Raid_Entrance_LOW');

	#build_wmo_map('Dungeon/Abyssal_Maw', 'Abyssal_Maw');

	#build_wmo_map('Cataclysm/deathwing', 'deathwing_wmo_torso');
	#build_wmo_map('Dungeon/Spineofthedestroyer', 'deathwings_back');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_column_01');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_courtyard_curb');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_courtyard_curb02');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_courtyard_curb03');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_courtyard_leftcurb');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_courtyard_rightcurb');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_courtyard_walls');
	#build_wmo_map('Dungeon/wellofeternity', 'Woe_EyeofAzsharaL_Curb');
	#build_wmo_map('Dungeon/wellofeternity', 'Woe_EyeofAzsharaR_Curb');
	#build_wmo_map('Dungeon/wellofeternity', 'WoE_Palace');
	#build_wmo_map('Dungeon/wellofeternity', 'WoE_Ruined_Walls');
	#build_wmo_map('Dungeon/wellofeternity', 'WoE_Well');

	#build_wmo_map('dungeon/md_cryptschool', 'md_cryptschool');


	$scholo_upper = array(
		#13, # odd broken bit
		14,0,
		1,2, # bone room, main hall
		9,7,
		3,
		5,
		4,
	);
	$scholo_lower = array(
		8, # zombie basement
		12,
		5,3,
		18,16,17,10,11,15,6,
		15, # gangling's lobby
		#6, empty?
	);
	$scholo_bottom = array(
		15, #lobby
		19, # north
		20, # south
		21, # east
	);

	#build_wmo_map('dungeon/md_ruinedkeep', 'Ruinedkeep_crypt_instance', $scholo_upper, array(), 'Ruinedkeep_crypt_instance_top');
	#build_wmo_map('dungeon/md_ruinedkeep', 'Ruinedkeep_crypt_instance', $scholo_lower, array(), 'Ruinedkeep_crypt_instance_bottom');
	#build_wmo_map('dungeon/md_ruinedkeep', 'Ruinedkeep_crypt_instance', $scholo_bottom, array(), 'Ruinedkeep_crypt_instance_basement');

	#build_wmo_map('dungeon/azjol_uppercity', 'azjol_uppercity');

	#build_wmo_map('pvp/buildings/tolbarad', 'tb_baradinhold');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_human_house02');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_human_inn');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_human_barracks');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_human_tower_open');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_human_townhall');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_micro01');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_micro02');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_micro03');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_tower');

	#build_wmo_map('dungeon/wintergrasp', 'wintergrasp_raid');

	#build_wmo_map('dungeon/nexus', 'nexus_70');
	#build_wmo_map('dungeon/nexus', 'nexus_80');
	#build_wmo_map('dungeon/nexus', 'nexus_90');
	#build_wmo_map('dungeon/nexus', 'nexus_exterior');

	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'coliseum_destruct_floor');
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'coliseum_intact_floor', array(), array(), '', 2);
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_argentcrusadecoliseum', array(), $exclude);
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_argentcrusadecoliseum_construction');
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_argentcrusadecoliseum_instance', array(2,3), array(), '', 2);
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_argentcrusadecoliseum_instance', array(0), array(), 'nd_argentcrusadecoliseum_instance_0');
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_argentcrusadecoliseum_instance', array(1), array(), 'nd_argentcrusadecoliseum_instance_1');
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_argentcrusadecoliseum_instance', array(2), array(), 'nd_argentcrusadecoliseum_instance_2');
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_argentcrusadecoliseum_instance', array(3), array(), 'nd_argentcrusadecoliseum_instance_3');
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_argentcrusadecoliseum_instance', array(4), array(), 'nd_argentcrusadecoliseum_instance_4');
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_argentcrusadecoliseum_instance', array(5), array(), 'nd_argentcrusadecoliseum_instance_5');
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_argentcrusadecoliseum_instance', array(6), array(), 'nd_argentcrusadecoliseum_instance_6');
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_argentcrusadestage');
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_argentcrusadetentone');
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_argentcrusadetenttwo');
	#build_wmo_map('northrend/buildings/human/nd_human_construction01', 'nd_human_construction01');

	build_wmo_map('cataclysm/firelands', 'firelands_sulfuronkeep', array(), array(), '', 3);

	function build_wmo_map($folder, $map_name, $only_chunks=array(), $exclude_chunks=array(), $alt_name='', $rotate=1){

		$folder = strtolower($folder);
		$map_name = strtolower($map_name);

		global $blps, $pngs, $flats;

		$out_name = $alt_name ? $alt_name : $map_name;

		echo "$out_name: ";

		$wmo = "$blps/world/wmo/$folder/{$map_name}.wmo";
		if ($map_name == 'karazhan') $wmo = "$blps/world/wmo/$folder/kharazan.wmo";

		if (!file_exists($wmo)){
			echo "can't find $wmo\n";
			return;
		}
		if (!filesize($wmo)){
			echo "zero-length wmo - $wmo\n";
			return;
		}

		#echo "WMO: $wmo\n";
		#exit;

		$chunks = extract_mogi($wmo);

#foreach ($chunks as $k => $v){
#	echo "$k,$v[0],$v[1],$v[2]\n";
#}
#exit;

		#$chunks[49][5] = -9999;
		#$chunks[19][5] = -9999;

		if ($alt_name == 'inst_uk_lower'){
			$chunks[10][5] = -9999;
		}


		#
		# filter chunks?
		#

		if (count($only_chunks)){
			foreach ($chunks as $k => $v){
				if (!in_array($k, $only_chunks)) unset($chunks[$k]);
			}
		}else if (count($exclude_chunks)){
			foreach ($chunks as $k => $v){
				if (in_array($k, $exclude_chunks)) unset($chunks[$k]);
			}
		}
#print_r($chunks);

		#
		# find out size of all group chunks
		#

		$png_folder = str_replace('/', '_', $folder);
		$png_prefix = $map_name.'_';

		$files = glob("$pngs/wmo_$png_folder/$png_prefix*");
		$pieces = array();
		$rx = preg_quote($png_prefix, '!').'(\d\d\d)_(\d\d)_(\d\d)\.png$';
		foreach ($files as $file){
			if (preg_match("!$rx!", $file, $m)){
				list($w, $h) = getimagesize($file);
				$pieces[intval($m[1])][] = array(
					'path'	=> $file,
					'group'	=> intval($m[1]),
					'x'	=> intval($m[2]),
					'y'	=> intval($m[3]),
					'w'	=> $w,
					'h'	=> $h,
				);
			}
		}


		#
		# build a list of group chunks with the total size and the positions of all the subchunks
		#

		$total_pngs = 0;

		$groups = array();
		foreach ($pieces as $idx => &$group){

			$total_h = 0;
			$total_w = 0;
			$chunk_w = 0;
			$chunk_h = 0;

			foreach ($group as $row){
				if ($row['x'] == 0) $total_h += $row['h'];
				if ($row['y'] == 0) $total_w += $row['w'];
				$chunk_w = max($chunk_w, $row['x']+1);
				$chunk_h = max($chunk_h, $row['y']+1);
			}

			$our_pngs = array();

			$y_pos = $total_h;
			for ($y=0; $y<$chunk_h; $y++){
				$x_pos = 0;
				for ($x=0; $x<$chunk_w; $x++){
					foreach ($group as $row){
						if ($row['x'] == $x && $row['y'] == $y){
							$our_pngs[] = array($row['path'], $row['w'], $row['h'], $x_pos, $y_pos-$row['h']);
						}
					}

					$x_pos += 256;
				}
				$y_pos -= 256;
			}

			$total_pngs += count($our_pngs);

			$groups[$idx] = array(
				'w'	=> $total_w,
				'h'	=> $total_h,
				'pngs'	=> $our_pngs,
			);
		}

		#print_r($groups);
		#exit;


		#
		# need to double chunk coords
		#

		foreach ($chunks as $k => $pos){
			$chunks[$k][0] *= 1.993;
			$chunks[$k][1] *= 1.993;
		}


		#
		# adjust chunk positions so they start in top left
		#

		$x1s = array();
		$y1s = array();
		$x2s = array();
		$y2s = array();

		foreach ($chunks as $k => $pos){
			$chunks[$k][1] -= $groups[$k]['h'];

			$x1s[] = $chunks[$k][0];
			$y1s[] = $chunks[$k][1];

			$x2s[] = $chunks[$k][0] + $groups[$k]['w'];
			$y2s[] = $chunks[$k][1] + $groups[$k]['h'];
		}

		$min_x = min($x1s);
		$min_y = min($y1s);

		foreach ($chunks as $k => $pos){
			$chunks[$k][0] -= $min_x;
			$chunks[$k][1] -= $min_y;
		}

		$canvas_w = ceil(max($x2s) - $min_x);
		$canvas_h = ceil(max($y2s) - $min_y);


		$total_chunks = count($chunks);
		echo "($total_chunks chunks, $total_pngs pngs) ";

#print_r($chunks);
#print_r($groups);
		$dst = "$flats/{$out_name}.png";

		echo shell_exec("convert -size !{$canvas_w}x{$canvas_h} null: -matte -compose Clear -composite -compose Over $dst");
		#echo shell_exec("convert xc:{$bg_color} -geometry !{$canvas_w}x{$canvas_h} $dst");

		uasort($chunks, 'zsort_chunks');

		foreach ($chunks as $k => $chunk){

			if (is_array($groups[$k]['pngs']))
			foreach ($groups[$k]['pngs'] as $row){

				$x = floor($chunk[0] + $row[3]);
				$y = floor($chunk[1] + $row[4]);

				$cmd = "composite $row[0] -geometry +{$x}+{$y} $dst $dst";
				#echo "$cmd\n";
				echo shell_exec($cmd);
				echo '.';
			}
		}
		if ($rotate==1){
			echo shell_exec("convert $dst -rotate 90 $dst");
		}
		if ($rotate==2){
			echo shell_exec("convert $dst -rotate 180 $dst");
		}
		if ($rotate==3){
			echo shell_exec("convert $dst -rotate 270 $dst");
		}
		if ($rotate=='kara'){
			echo shell_exec("convert $dst -rotate 135 $dst");
		}
		echo " done\n";
	}

	function cut_wmo_map($name, $chunks){

		global $flats;

		$dst = "$flats/{$name}.png";

		foreach ($chunks as $chunk){
			list($x,$y, $w,$h) = $chunk;

			$x--;
			$y--;

			$x2 = $x+$w;
			$y2 = $y+$h;

			echo shell_exec("convert $dst -fill 'blue' -draw 'rectangle $x,$y $x2,$y2' $dst");
		}
		echo shell_exec("convert $dst -transparent 'blue' $dst");
		
	}

	function zsort_chunks($a, $b){
		return $a[5]-$b[5];
	}



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
		#echo "root\t\t: ".format_box($box)."\n";

		$chunks = array();

		seek_to_chunk($fh, 'MOGI');
		for ($i=0; $i<$groups; $i++){

			$flags = read_int($fh);
			$floats = fread($fh, 24);
			$box = unpack('f6', $floats);
			$name = read_int($fh);

			$chunks[$i] = array($box[1], 0-$box[2], $box[3], $box[4], 0-$box[5], $box[6]);

			#echo "group $i \t: ".format_box($box)."\n";
			#print_r($box);
		}

		#echo "found $groups groups\n";
		#exit;

		fclose($fh);

		return $chunks;
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
