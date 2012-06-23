<?
	include('config.php');

if (1){
	clean_set('azeroth');

	$replace = '#001D29';
	#$replace = '#ffff00';

	build_set('azeroth', 'Kalimdor/map', 23, 48, 9, 55, 8, 6+7, array('45_20', '46_20', '47_20')); # kalimdor
	build_set('azeroth', 'Expansion01/map', 50, 59, 32, 42, 0, 11+7, array('58_32')); # exodar
	cull_tiles('azeroth', 30, 16, 4, 5);
	patch_set_offset('azeroth', $replace, 14,13, 0,0, 170,40);
	patch_set_offset('azeroth', $replace, 18,20, 0,0, 170,40);
	patch_set_offset('azeroth', $replace, 14,26, 0,0, 111,40);
	patch_set_offset('azeroth', $replace, 10,35, 0,0, 170,40);
	patch_set_offset('azeroth', $replace, 18,16, 7,0, 20,12);
	patch_set_offset('azeroth', $replace, 18,16, 52,0, 120,36);
	patch_set_offset('azeroth', $replace, 12,45, 0,0, 26,12);
	patch_set_offset('azeroth', '#153A42', 12,20, 7,0, 16,9);
	patch_set_offset('azeroth', '#083039', 15,23, 7,0, 8,9);
	patch_set_offset('azeroth', '#183C42', 15,23, 16,0, 7,9);

	build_set('azeroth', 'Azeroth/map', 17, 45, 22, 61, 34+21, 12+7); # eastern kingdoms
	build_set('azeroth', 'Expansion01/map', 41, 51, 6, 20, 53+21, 0+7, array('46_20', '47_20', '40_20', '41_20', '42_20')); # silvermoon
	cull_tiles('azeroth', 55, 45, 4, 1);
	cull_tiles('azeroth', 80,7, 1,4);
	cull_tiles('azeroth', 81,11, 1,4);
	patch_set_offset('azeroth', $replace, 81,21, 0,174, 256+128,81);

	build_set('azeroth', 'Northrend/map', 16, 45, 11, 33, 33, 0); # northrend
	cull_tiles('azeroth', 45, 17);
	cull_tiles('azeroth', 34, 4); # random tiny island out in the ocean?
	cull_tiles('azeroth', 43,2, 3,1);
	cull_tiles('azeroth', 45,1);
	cull_tiles('azeroth', 61,14);
	cull_set('azeroth');
	color_replace('azeroth', '#1E3A5D', $replace, 33, 0, 30, 23);
	color_replace('azeroth', '#1E395D', $replace, 42, 0, 8, 5);
	color_replace('azeroth', '#1B3A5D', $replace, 42, 0, 8, 5);
	color_replace('azeroth', '#1B395D', $replace, 42, 0, 8, 5);
	patch_set_offset('azeroth', $replace, 42,4, 108,8, 20,60);
	patch_set_offset('azeroth', $replace, 42,4, 104,68, 8,16);
	patch_set_offset('azeroth', $replace, 42,3, 0,0, 256+174, 128);
	patch_set_offset('azeroth', $replace, 42,3, 176,129, 28,31);
	patch_set_offset('azeroth', $replace, 46,3, 0,0, 106,68);
	patch_set_offset('azeroth', $replace, 48,1, 76,0, 180,512);
	patch_set_offset('azeroth', $replace, 47,3, 157,0, 150,88);
	color_replace('azeroth', '#1B3A5D', $replace, 59, 14, 3, 3);
	patch_set_offset('azeroth', $replace, 59,14, 212,8, 44+256, 68);
	patch_set_offset('azeroth', $replace, 60,14, 128,76, 128,140);
	patch_set_offset('azeroth', $replace, 61,15, 32,0, 24,256+100);
	patch_set_offset('azeroth', $replace, 61,15, 18,0, 22,46);
	patch_set_offset('azeroth', $replace, 61,16, 16,32, 50,50);
	patch_set_offset('azeroth', $replace, 61,16, 0,72, 40,40);

	build_set('azeroth', 'LostIsles/map', 24, 31, 26, 32, 34, 32); # lost isles
	color_replace('azeroth', '#4F8EFF', $replace, 34, 32, 8, 7);

	$x = 40; $y = 38;
	build_set('azeroth', 'LostIsles/map', 26, 31, 46, 51, $x, $y); # kezan
	color_replace('azeroth', '#293C4F', $replace, $x, $y, 6, 6);
	patch_set_offset('azeroth', $replace, $x, $y, 0, 0, 250, 250);
	patch_set_offset('azeroth', $replace, $x, $y, 0, 1024, 154, 1024+512);
	patch_set_offset('azeroth', $replace, $x+2,$y+5, 0,250, 1024,10);
	# bottom left corner
	color_replace('azeroth', '#314E73', $replace, $x,$y+5, 2,1, 5);
	color_replace('azeroth', '#2B435D', $replace, $x,$y+5, 2,1, 4);
	patch_set_offset('azeroth', $replace, $x,$y+5, 0,0, 236,256);
	patch_set_offset('azeroth', $replace, $x,$y+5, 236,148, 20,108);
	patch_set_offset('azeroth', $replace, $x+1,$y+5, 0,200, 143,56);
	patch_set_offset('azeroth', $replace, $x+1,$y+5, 0,184, 51,16);
	patch_set_offset('azeroth', $replace, $x+1,$y+5, 0,146, 11,38);
	patch_set_offset('azeroth', $replace, $x+1,$y+5, 11,165, 12,19);
	patch_set_offset('azeroth', $replace, $x+1,$y+5, 27,180, 15,4);
	patch_set_offset('azeroth', $replace, $x+1,$y+5, 51,189, 32,11);
	patch_set_offset('azeroth', $replace, $x+1,$y+5, 87,194, 3,3);
	patch_set_offset('azeroth', $replace, $x+1,$y+5, 143,208, 113,48);
	# bottom right corner
	patch_set_offset('azeroth', $replace, $x+4,$y+5, 240,238, 15,18);
	color_replace('azeroth', '#314E73', $replace, $x+5,$y+5, 1,1, 5);
	color_replace('azeroth', '#2B435D', $replace, $x+5,$y+5, 1,1, 4);
	patch_set_offset('azeroth', $replace, $x+5,$y+5, 0,224, 256,32);
	patch_set_offset('azeroth', $replace, $x+5,$y+5, 48,212, 208,8);
	patch_set_offset('azeroth', $replace, $x+5,$y+5, 40,220, 216,4);
	patch_set_offset('azeroth', $replace, $x+5,$y+5, 72,192, 184,20);
	patch_set_offset('azeroth', $replace, $x+5,$y+5, 176,176, 80,16);
	patch_set_offset('azeroth', $replace, $x+5,$y+5, 240,76, 16,24);
	patch_set_offset('azeroth', $replace, $x+5,$y+5, 220,120, 36,49);
	patch_set_offset('azeroth', $replace, $x+5,$y+5, 216,148, 9,24);
	patch_set_offset('azeroth', $replace, $x+5,$y+5, 196,164, 22,13);

	build_set('azeroth', 'TolBarad/map', 27, 32, 31, 35, 57, 30); # tol barad
	color_replace('azeroth', '#00000D', $replace, 57, 30, 6, 5);
	patch_set_offset('azeroth', $replace, 57, 30, 760, 1024+115, 512, 256);
	patch_set_offset('azeroth', $replace, 58,30, 0,0, 80,69);

	build_set('azeroth', 'MaelstromZone/map', 28, 32, 28, 32, 44, 27); # maelstrom
	cull_tiles('azeroth', 44,31, 1,1);
	cull_tiles('azeroth', 47,31,2,1);
	color_replace('azeroth', '#121210', $replace, 44, 27, 5,5, 5);
	patch_set_offset('azeroth', $replace, 44,27, 0,0, 256*5,62);
	patch_set_offset('azeroth', $replace, 44,27, 0,0, 140,256*5);
	patch_set_offset('azeroth', $replace, 48,27, 200,0, 56,256*5);
	patch_set_offset('azeroth', $replace, 48,28, 76,200, 179,56+767);
	patch_set_offset('azeroth', $replace, 48,27, 58,55, 74,38);
	patch_set_offset('azeroth', $replace, 47,30, 177,152, 190,103);
	patch_set_offset('azeroth', $replace, 47,30, 123,184, 71,71);
	patch_set_offset('azeroth', $replace, 45,31, 0,200, 513,55);
	patch_set_offset('azeroth', $replace, 45,31, 0,51, 102,83);
	patch_set_offset('azeroth', $replace, 45,31, 105,81, 41,30);
	patch_set_offset('azeroth', $replace, 46,31, 160,68, 41,28);

	build_set('azeroth', 'hawaiimainland/map', 19, 39, 18, 38, 36, 48);

	cull_set('azeroth');

	# azeroth has a bunch of single bad tiles with junk, in the ocean.
	# we need to delete these
	$bad_tiles = array();

	# bloodmyst isles
	$bad_tiles[] = array(7,18);
	$bad_tiles[] = array(10,23);
	$bad_tiles[] = array(10,27);

	# kalimdor
	$bad_tiles[] = array(10,13);
	$bad_tiles[] = array(25,16);
	$bad_tiles[] = array(33,25);
	$bad_tiles[] = array(10,31);
	$bad_tiles[] = array(30,35);
	$bad_tiles[] = array(9,38);
	$bad_tiles[] = array(8,41);
	$bad_tiles[] = array(29,39);
	$bad_tiles[] = array(29,40);
	$bad_tiles[] = array(8,45);
	$bad_tiles[] = array(28,48);
	$bad_tiles[] = array(10,50);
	$bad_tiles[] = array(10,52);
	$bad_tiles[] = array(10,58);

	# eastern kingdoms
	$bad_tiles[] = array(82,15);
	$bad_tiles[] = array(82,16);
	$bad_tiles[] = array(63,19);
	$bad_tiles[] = array(63,22);
	$bad_tiles[] = array(67,21);
	$bad_tiles[] = array(71,20);
	$bad_tiles[] = array(73,19);
	$bad_tiles[] = array(63,26);
	$bad_tiles[] = array(63,28);
	$bad_tiles[] = array(82,26);
	#$bad_tiles[] = array(60,30); # gets covered by tol barad
	$bad_tiles[] = array(63,32);
	$bad_tiles[] = array(55,34);
	#$bad_tiles[] = array(60,34); # gets covered by tol barad
	#$bad_tiles[] = array(61,34); # gets covered by tol barad
	$bad_tiles[] = array(55,38);
	$bad_tiles[] = array(59,38);
	$bad_tiles[] = array(55,42);
	$bad_tiles[] = array(59,43);
	$bad_tiles[] = array(63,46);
	$bad_tiles[] = array(62,50);
	$bad_tiles[] = array(63,50);
	$bad_tiles[] = array(63,54);
	$bad_tiles[] = array(65,56);
	$bad_tiles[] = array(74,54);
	$bad_tiles[] = array(79,50);
	$bad_tiles[] = array(83,37);
	$bad_tiles[] = array(83,38);

	# panda land
	$bad_tiles[] = array(52,48);
	$bad_tiles[] = array(50,51);
	$bad_tiles[] = array(55,51);
	$bad_tiles[] = array(55,53);
	$bad_tiles[] = array(36,65);
	$bad_tiles[] = array(36,59);
	$bad_tiles[] = array(43,48);


	foreach ($bad_tiles as $p) cull_tiles('azeroth', $p[0], $p[1], 1, 1);
}
if (0){
	clean_set('outland');
	build_set('outland', 'Expansion01/map', 12, 33, 21, 42, 0, 0);
}
if (0){
	clean_set('vashjir');
	build_set('vashjir', 'Azeroth/noLiquid_map', 17, 26, 39, 47, 0, 0);
}
if (0){
	clean_set('deepholm');
	build_set('deepholm', 'Deephome/map', 28, 33, 27, 32, 0, 0, array('28_27','28_32','33_27','33_32'));

	patch_set('deepholm', '#2E2D36', 256, 0, 256+161, 63);
	patch_set('deepholm', '#2E2D36', 256, 0, 256+48, 144);
	patch_set('deepholm', '#2E2D36', 256, 0, 256+16, 224);

	patch_set('deepholm', '#2E2D36', 0, 256, 17, 512+31);
	patch_set('deepholm', '#2E2D36', (5*256)+190, 256, 6*256, 256+20);
	patch_set('deepholm', '#2E2D36', (5*256)+208, 768+222, 6*256, 5*256);

	patch_set('deepholm', '#2E2D36', 256, (256*5)+224, 5*256, 256*6);
	patch_set('deepholm', '#2E2D36', 256, (256*5)+78, 256+114, 256*6);
}
if (0){
	clean_set('bg_eots');
	build_set('bg_eots', 'NetherstormBG/map', 28, 30, 26, 29, 0, 0);
}
if (0){
	clean_set('bg_ab');
	build_set('bg_ab', 'PVPZone04/map', 28, 31, 28, 31, 0, 0);
	patch_set('bg_ab', '#414318', 0, 0, 1024, 48);
	patch_set('bg_ab', '#414318', 0, 1024-50, 1024, 1024);
	patch_set('bg_ab', '#414318', 0, 0, 48, 1024);
	patch_set('bg_ab', '#414318', 1024-50, 0, 1024, 1024);
}
if (0){
	clean_set('bg_sota');
	build_set('bg_sota', 'NorthrendBG/map', 30, 33, 25, 31, 0, 0);
	patch_set('bg_sota', '#052431', 0, 1536+128, 1024, 1792); 
}
if (0){
	clean_set('bg_ioc');
	build_set('bg_ioc', 'IsleofConquest/map', 31, 37, 28, 33, 0, 0);
}
if (0){
	clean_set('bg_bfg');
	build_set('bg_bfg', 'Gilneas_BG_2/map', 28, 31, 28, 30, 0, 0);
	patch_set('bg_bfg', '#000C18', 768+127, 0, 1024, 1024);
	patch_set('bg_bfg', '#000C18', 0, 768+160, 1024, 1024);
	patch_set('bg_bfg', '#000C18', 0, 512+176, 1024, 768);
}
if (0){
	clean_set('bg_tp');
	build_set('bg_tp', 'CataclysmCTF/map', 30, 32, 27, 29, 0, 0);
	patch_set('bg_tp', '#8E8175', 0, 0, 209, 209);
	patch_set('bg_tp', '#8E8175', 0, 0, 256*3, 32);
	patch_set('bg_tp', '#8E8175', 0, 210, 112, 256+256+62);
	patch_set('bg_tp', '#8E8175', 0, 512, 32, 512+256);
	patch_set('bg_tp', '#8E8175', 0, 512+240, 256*3, 256*3);
	patch_set('bg_tp', '#8E8175', 512+64, 32, 512+256, 208);
	patch_set('bg_tp', '#8E8175', 512+225, 209, 512+256, 512+63);
	patch_set('bg_tp', '#8E8175', 512+112, 512+47, 512+256, 512+63);
}
if (0){
	clean_set('bg_av');
	build_set('bg_av', 'PVPZone01/map', 31, 33, 30, 34, 0, 0);
}
if (0){
	clean_set('bg_wsg');
	build_set('bg_wsg', 'PVPZone03/map', 28, 30, 28, 30, 0, 0);
	patch_set('bg_wsg', '#F7F3F7', 0, 0, 96, 512+256); # left
	patch_set('bg_wsg', '#F7F3F7', 512+48, 0, 512+256, 512+256); # right
	patch_set('bg_wsg', '#F7F3F7', 0, 0, 512+256, 208); # top
	patch_set('bg_wsg', '#F7F3F7', 0, 512+160, 512+256, 512+256); # bottom

	# bottom edge
	patch_set('bg_wsg', '#F7F3F7', 0, 512+112, 208, 512+256);
	patch_set('bg_wsg', '#F7F3F7', 97, 512+32, 112, 112+512);
	patch_set('bg_wsg', '#F7F3F7', 113, 64+512, 128, 112+512);
	patch_set('bg_wsg', '#F7F3F7', 129, 80+512, 144, 112+512);
	patch_set('bg_wsg', '#F7F3F7', 144, 96+512, 175, 112+512);
	patch_set('bg_wsg', '#F7F3F7', 209, 128+512, 224, 160+512);
	patch_set('bg_wsg', '#F7F3F7', 32+512, 144+512, 48+512, 160+512);
}
if (0){
	clean_set('inst_bmh');
	build_set('inst_bmh', 'HyjalPast/map', 34, 39, 20, 24, 0, 0);

	patch_set('inst_bmh', '#F7F3F7', 0, 0, 64, 5*256); # left
	patch_set('inst_bmh', '#F7F3F7', 0, 1024+240, 6*256, 1024+256); # bottom
	patch_set('inst_bmh', '#F7F3F7', 1280+240, 0, 1280+256, 1280); # right

	# top left
	patch_set('inst_bmh', '#F7F3F7', 0, 0, 512, 256+31);
	patch_set('inst_bmh', '#F7F3F7', 0, 256, 240, 256+128);

	# bottom right
	patch_set('inst_bmh', '#F7F3F7', 1024+160, 1024+192, 1280+256, 1024+256);
	patch_set('inst_bmh', '#F7F3F7', 1280+16, 1024+115, 1280+256, 1024+256);

	# bottom left
	patch_set('inst_bmh', '#F7F3F7', 65, 95+768, 96, 1280);
	patch_set('inst_bmh', '#F7F3F7', 96, 128+768, 112, 1280);
	patch_set('inst_bmh', '#F7F3F7', 112, 160+768, 128, 1280);
	patch_set('inst_bmh', '#F7F3F7', 128, 176+768, 144, 1280);
	patch_set('inst_bmh', '#F7F3F7', 144, 208+768, 160, 1280);
	patch_set('inst_bmh', '#F7F3F7', 160, 224+768, 176, 1280);
	patch_set('inst_bmh', '#F7F3F7', 176, 240+768, 240, 1280);
	patch_set('inst_bmh', '#F7F3F7', 241, 47+1024, 256+16, 1280);

	patch_set('inst_bmh', '#F7F3F7', 17+256, 63+1024, 32+256, 1280);
	patch_set('inst_bmh', '#F7F3F7', 32+256, 79+1024, 64+256, 1280);
	patch_set('inst_bmh', '#F7F3F7', 64+256, 91+1024, 96+256, 1280);
	patch_set('inst_bmh', '#F7F3F7', 96+256, 128+1024, 128+256, 1280);
	patch_set('inst_bmh', '#F7F3F7', 128+256, 144+1024, 160+256, 1280);
	patch_set('inst_bmh', '#F7F3F7', 160+256, 160+1024, 192+256, 1280);
	patch_set('inst_bmh', '#F7F3F7', 192+256, 176+1024, 256+256+16, 1280);
}
if (0){
	clean_set('inst_hillsbrad');
	build_set('inst_hillsbrad', 'HillsbradPast/map', 27, 32, 25, 30, 0, 0);
}
if (0){
	clean_set('inst_zf');
	build_set('inst_zf', 'TanarisInstance/map', 29, 31, 28, 30, 0, 0);

	patch_set('inst_zf', '#D0C1B5', 0, 0, 64, 768); # left
	patch_set('inst_zf', '#D0C1B5', 0, 0, 768, 16); # top
	patch_set('inst_zf', '#D0C1B5', 512+16, 0, 768, 768); # right

	patch_set('inst_zf', '#D0C1B5', 256+176, 17, 512, 64);
	patch_set('inst_zf', '#D0C1B5', 256+192, 64, 512, 96);
	patch_set('inst_zf', '#D0C1B5', 256+224, 96, 512, 128);
	patch_set('inst_zf', '#D0C1B5', 512, 17, 512+16, 160);
}
if (0){
	#clean_set('inst_strat');
	#build_set('inst_strat', 'Stratholme/map', 37, 39, 24, 26);
}
if (0){
	clean_set('inst_mgt');
	build_set('inst_mgt', 'Sunwell5ManFix/map', 31, 33, 30, 32);
}
if (0){
	clean_set('inst_zg');
	build_set('inst_zg', 'zul_gurub5man/map', 34,36, 53,55);

	patch_set('inst_zg', '#ffffff', 512+30, 0, 512+256, 512+256);
	patch_set('inst_zg', '#ffffff', 0, 512+160, 512+256, 512+256);
}
if (0){
	clean_set('inst_za');
	build_set('inst_za', 'zulaman/map', 29,30, 31,32);

	patch_set('inst_za', '#2D2A21', 0, 256+150, 512, 512);
}
if (0){
	clean_set('inst_lc');
	build_set('inst_lc', 'uldumdungeon/map', 33,35, 51,53);
}
if (0){
	clean_set('inst_aq20');
	build_set('inst_aq20', 'ahnqiraj/map', 27,30, 46,50);

	patch_set('inst_aq20', '#655339', 0,0, 256+16,256);
	patch_set('inst_aq20', '#655339', 0,0, 1024,128);
	patch_set('inst_aq20', '#655339', 0,256, 96,512);
	patch_set('inst_aq20', '#655339', 0,512, 64,256*5);

	patch_set('inst_aq20', '#655339', 0,1024+160, 1024,256*5);
	patch_set('inst_aq20', '#655339', 512+206,1024+30, 1024,256*5);
	patch_set('inst_aq20', '#655339', 768+64,0, 1024,256*5);
}
if (0){
	clean_set('inst_pos');
	#build_set('inst_pos', 'quarryoftears/map', 30,32, 29,31);
	build_set('inst_pos', 'icecrowncitadel5man/map', 28,30, 30,32);

	patch_set('inst_pos', '#151A21', 0,0, 25,768);
	patch_set('inst_pos', '#151A21', 0,0, 768,20);
	patch_set('inst_pos', '#151A21', 0,0, 256+50,84);
	patch_set('inst_pos', '#151A21', 0,0, 256+76,54);
	patch_set('inst_pos', '#151A21', 512+206,0, 768,768);
	patch_set('inst_pos', '#151A21', 0, 512+240, 768,768);
	patch_set('inst_pos', '#151A21', 512+176,512+26, 768,768);

	patch_set('inst_pos', '#151A21', 0,0, 125,148);
}
if (0){
	clean_set('inst_bm');
	build_set('inst_bm', 'cavernsoftime/map', 17,19, 34,36);
}
if (0){
	clean_set('inst_vp');
	build_set('inst_vp', 'skywalldungeon/map', 30,33, 32,34);
}
if (0){
	clean_set('raid_tofw');
	build_set('raid_tofw', 'skywallraid/map', 29,31, 31,33);
}
if (0){
	clean_set('inst_woe');
	build_set('inst_woe', 'cotwaroftheancients/map', 40,43, 24,26);

	clean_set('inst_et');
	build_set('inst_et', 'cotdragonblight/map', 28,33, 23,27);
}
if (0){
	clean_set('inst_hot');
	build_set('inst_hot', 'thehouroftwilight/map', 30,32, 22,25);
}
if (0){
	clean_set('raid_bh');
	build_set('raid_bh', 'baradinhold/map', 29,29, 31,31);
}
if (0){
	clean_set('raid_os');
	build_set('raid_os', 'chamberofaspectsblack/map', 30,31, 25,26);

	patch_set('raid_os', '#1E1C1E', 0,0, 512,27); #top
	patch_set('raid_os', '#1E1C1E', 0,0, 29,512); # left
	patch_set('raid_os', '#1E1C1E', 256+228,0, 512,512); # right
	patch_set('raid_os', '#1E1C1E', 0,256+198, 512,512); # bottom

	patch_set('raid_os', '#1E1C1E', 256+176,256+63, 512,512); # odd chunk bottom-right
}
if (0){
	clean_set('raid_rs');
	build_set('raid_rs', 'chamberofaspectsred/map', 30,31, 25,26);

	patch_set('raid_rs', '#392E39', 0,0, 512,34); # top
	patch_set('raid_rs', '#392E39', 0,0, 26,512); # left
	patch_set('raid_rs', '#392E39', 256+236,0, 512,512); # right
	patch_set('raid_rs', '#392E39', 0,256+231, 512,512); # bottom
}
if (0){
	clean_set('inst_oculus');
	build_set('inst_oculus', 'nexus80/map', 28,31, 28,31);

	#patch_set('inst_oculus', '#183657', 0,0, 1024,163); # top
	#patch_set('inst_oculus', '#183657', 0,0, 97,1024); # left
}
if (0){
	clean_set('raid_eoe');
	build_set('raid_eoe', 'nexusraid/map', 29,29, 30,30);
}
if (0){
	clean_set('raid_fl');
	build_set('raid_fl', 'firelands1/noliquid_map', 30,33, 29,33);

	clean_set('misc_fl');
	build_set('misc_fl', 'firelandsdailies/map', 28,35, 26,31);
}
if (0){
	#clean_set('misc_dmf');
	#build_set('misc_dmf', 'darkmoonfaire/map', 18,21, 37,41);

	clean_set('misc_dal');
	build_set('misc_dal', 'wmo_northrend_dalaran/nd_dalaran_091_', 0,4, 0,5, 0,0,array(),1); 
}
if (0){
	clean_set('inst_ok');
	build_set('inst_ok', 'azjol_lowercity/map', 32,34, 30,31);

	patch_set('inst_ok', '#424542', 0, 0, 48, 512);
}


	function build_set($set_name, $src_path, $min_x, $max_x, $min_y, $max_y, $offset_x=0, $offset_y=0, $skips=array(), $flip=false){

		$src_path = StrToLower($src_path);

		global $pngs;
		global $built;

		@mkdir("$built/$set_name");

		for ($x=$min_x; $x<=$max_x; $x++){
		for ($y=$min_y; $y<=$max_y; $y++){

			$x_out = ($x-$min_x)+$offset_x;
			$y_out = ($y-$min_y)+$offset_y;

			if ($flip){
				$y_out = ($max_y-$min_y) - $y_out;
			}

			$src_key = sprintf('%02d_%02d', $x, $y);
			$dst_key = sprintf('%02d_%02d', $x_out, $y_out);

			if (in_array($src_key, $skips)) continue;

			$src = "$pngs/$src_path$src_key.png";
			$dst = "$built/$set_name/tile_z0_$dst_key.png";

			$src16 = "$pngs/$src_path$src_key--16.png";
			$dst16 = "$built/$set_name/tile_z0_$dst_key--16.png";

			@copy($src, $dst);
			@copy($src16, $dst16);
			echo '.';
		}
		}
	}

	function patch_set_offset($set_name, $color, $x_off, $y_off, $x, $y, $w, $h){

		$x_off *= 256;
		$y_off *= 256;

		patch_set($set_name, $color, $x_off + $x, $y_off + $y, $x_off + $x + $w, $y_off + $y + $h);

	}

	function patch_set($set_name, $color, $x1, $y1, $x2, $y2){

		global $built;

		# apply a color to some tiles
		$min_tile_x = floor($x1 / 256);
		$min_tile_y = floor($y1 / 256);
		$max_tile_x = floor($x2 / 256);
		$max_tile_y = floor($y2 / 256);

		for ($x=$min_tile_x; $x<=$max_tile_x; $x++){
		for ($y=$min_tile_y; $y<=$max_tile_y; $y++){

			# applying patch to tile $x,$y
			$dst_key = sprintf('%02d_%02d', $x, $y);
			$dst = "$built/$set_name/tile_z0_$dst_key.png";
			if (!file_exists($dst)) continue;

			$start_x = $x*256;
			$start_y = $y*256;

			$my_x1 = $x1 - $start_x;
			$my_x2 = $x2 - $start_x;

			$my_y1 = $y1 - $start_y;
			$my_y2 = $y2 - $start_y;

			$my_x1 = max(min(255, $my_x1), 0);
			$my_x2 = max(min(255, $my_x2), 0);
			$my_y1 = max(min(255, $my_y1), 0);
			$my_y2 = max(min(255, $my_y2), 0);

			$w = ($my_x2 - $my_x1) + 1;
			$h = ($my_y2 - $my_y1) + 1;

			#echo "applying patch to $x,$y $dst, {$w}x{$h}+{$my_x1}+{$my_y1} ($my_x1,$my_y1 - $my_x2,$my_y2)\n";

			#echo shell_exec("composite -geometry {$w}x{$h}!+{$my_x1}+{$my_y1} xc:red $dst $dst");
			echo shell_exec("convert $dst -fill '$color' -draw 'rectangle $my_x1,$my_y1 $my_x2,$my_y2' $dst");

			echo 'x';
		}
		}
	}

	function clean_set($set_name){

		global $built;
		shell_exec("rm -rf $built/$set_name");
	}

	function color_replace($set_name, $from_col, $to_col, $x, $y, $w, $h, $fuzz=0){

		global $built;

		$fuzz = $fuzz ? "-fuzz {$fuzz}%" : '';

		for ($yp=$y; $yp<$y+$h; $yp++){
		for ($xp=$x; $xp<$x+$w; $xp++){

			$dst_key = sprintf('%02d_%02d', $xp, $yp);
			$dst = "$built/$set_name/tile_z0_$dst_key.png";

			if (!file_exists($dst)) continue;

			echo shell_exec("mogrify $dst $fuzz -fill '$to_col' -opaque '$from_col' $dst");

			echo 'c';
		}
		}

	}

	function cull_tiles($set_name, $x, $y, $w=1, $h=1){
	
		global $built;

		for ($yp=$y; $yp<$y+$h; $yp++){
		for ($xp=$x; $xp<$x+$w; $xp++){

			$dst_key = sprintf('%02d_%02d', $xp, $yp);
			$dst = "$built/$set_name/tile_z0_$dst_key.png";

			@unlink($dst);
			echo 'k';
		}
		}
	}

	function cull_set($set_name){

		global $built;
		$dh = opendir("$built/$set_name/");
		while (($file = readdir($dh)) !== false){
			if (!preg_match('!\.png$!', $file)) continue;

			$size = filesize("$built/$set_name/$file");
			$kill = 0;

			if (preg_match('!--16\.png$!', $file)){

				if ($size == 134) $kill = 1;
			}else{
				if ($size == 783) $kill = 1;
				if ($size == 784) $kill = 1;
			}

			if ($kill){
				@unlink("$built/$set_name/$file");
				echo '/';
			}
		}
	}

	echo "\ndone\n";
