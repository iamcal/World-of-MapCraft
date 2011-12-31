WoW-Maps - World of Warcraft Slippy Maps
========================================

To recreate the maps yourself:

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
 * <code>wow-update-nnnnn.MPQ</code> (multiple files)
 * <code>wow-update-base-nnnnn.MPQ</code> (multiple files)
 * You'll find them all inside the <code>Data</code> subfolder of your WoW installation
* Extract the BLPs from these files:
 * `MPQExtractor -e "World\Minimaps\*" -f -p mpqs/wow-update-1*.MPQ mpqs/wow-update-base-1*.MPQ -o blps mpqs/art.MPQ`
 * This will take a few minutes!
* Run <code>1_convert.php</code> to convert all of the BLP files to PNGs
 * This takes a while!
 * You should now have lots of sub-folders in the <code>pngs</code> folder
* Run <code>2_combine.php</code> to make HTML previews or all the maps
 * You can now browse the <code>maps</code> subfolder and view everything you extracted
 * The files ending <code>--16</code> use lower-resolution files so are good for quick previews
* Once you know the tiles you want, modify the code at the top of <code>3_build.php</code>
 * The defaults are set for patch 4.3, extracting a few different maps - you may want more or less
 * They include combining multiple maps and patching over unused parts of tiles
 * This script builds the most-zoomed level of tiles for the final maps
* Run <code>4_recombine.php</code> to preview your creaed tilesets
 * The <code>$size</code> setting at the top lets you change the preview output size
 * Choose 16 or smaller to load the quick preview images
* Run <code>5_resize.php</code> to build the other zoom levels
 * This will take a long time for big maps
* You should now be able to view your slippy maps!
 * Modify <code>www/index.php</code> to point to the tiles
 * Also add the zoom levels & dimensions here
* If you want to put the tiles on S3, use <code>6_sync.php</code>
