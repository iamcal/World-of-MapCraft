World-of-MapCraft - World of Warcraft Slippy Maps
=================================================

To see the maps in action: http://worldofmapcraft.com/

For an explanation of how it all works: http://www.iamcal.com/mapping-warcraft/


## Generating the map tiles

This code will help you to generate your own set of map tiles.
It wont work immediately out of the box - there's some fiddling involved.
There are many more maps included in WoW than are used on the website - try extracting 
some different ones!


### Preparation

* Make sure you have at least 10 GB of space!
* Install ImageMagick
* Install <a href="https://github.com/Kanma/MPQExtractor">MPQExtractor</a> & <a href="https://github.com/Kanma/BLPConverter">BLPConverter</a>
 * Both of these tools require <code>cmake</code> to build
* Create some folders:
 * <code>mpqs</code> - base MPQ files will go here
 * <code>blps</code> - extracedt BLP files will go here
 * <code>pngs</code> - PNGs converted from BLPs will go here
 * <code>maps</code> - Preview maps will go here
 * <code>built</code> - Final built tilesets will go here
 * It is very helpful for these folders to be accessible in a browser.
* Modify <code>build/config.php</code> with the paths and URLs to these folders
* Copy MPQ files from your WoW install, specifically:
 * <code>art.MPQ</code>
 * <code>world.MPQ</code>
 * <code>wow-update-nnnnn.MPQ</code> (multiple files)
 * <code>wow-update-base-nnnnn.MPQ</code> (multiple files)
 * You'll find them all inside the <code>Data</code> subfolder of your WoW installation


### Generation

* Extract the BLP and WMO files from the MPQs:
 * `./extract.sh` is a good starting point
 * This will take a few minutes!

* Run <code>build/0_rename.php</code> to fix path casing.
 * You don't need to do this if you have the `-c` option in MPQExtractor

* Run <code>build/1_convert.php</code> to convert all of the BLP files to PNGs
 * This takes a while!
 * You should now have lots of sub-folders in the <code>pngs</code> folder

* Run <code>build/2_combine.php</code> to make HTML previews or all the maps
 * You can now browse the <code>maps</code> subfolder and view everything you extracted
 * The files ending <code>--16</code> use lower-resolution files so are good for quick previews

* Once you know the tiles you want, modify the code at the top of <code>build/3_build.php</code>
 * The defaults are set for patch 4.3, extracting a few different maps - you may want more or less
 * They include combining multiple maps and patching over unused parts of tiles
 * This script builds the most-zoomed level of tiles for the final maps
 * The background colors specified here need to match `build/colors.php`

* Run <code>build/4_recombine.php</code> to preview your creaed tilesets
 * The <code>$size</code> setting at the top lets you change the preview output size
 * Choose 16 or smaller to load the quick preview images

* Run <code>build/5_resize.php</code> to build the other zoom levels
 * This will take a long time for big maps

* You should now be able to view your slippy maps!
 * Modify <code>www/index.php</code> to point to the tiles
 * Also add the zoom levels & dimensions here

* If you want to put the tiles on S3, use <code>build/6_sync.php</code>

* To compress the PNGs for faster serving, use <code>build/7_crush.php</code>

* If you want to make WMO maps, you'll need some extra tools:
 * `build/wmo_build.php` to assemble a flat image from a WMO group
 * `build/wmo_assemble.php` to assemble multiple flats into a tileset
 * From there, you can use <code>build/5_resize.php</code> to build the other zoom levels
