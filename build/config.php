<?php
	#
	# path where we'll extract the BLP files
	#

	$blps_raw	= "/var/www/doats.net/tiles/out";
	$blps		= "/var/www/doats.net/tiles/out_fixed";


	#
	# path where we'll convert BLPs to PNGs, along with URL to it
	#

	$pngs = "/var/www/doats.net/tiles/pngs_fixed";
	$pngs_url = "/tiles/pngs_fixed";


	#
	# path to the preview maps
	#

	$maps = "/var/www/doats.net/tiles/maps";


	#
	# flat versions of composited images
	#

	$flats = "/var/www/doats.net/tiles/flats";


	#
	# path to the built tilesets
	#

	$built = "/var/www/doats.net/tiles/built";
	$built_url = "/tiles/built";

	$crushed = "/var/www/doats.net/tiles/crushed";


	#
	# other stuff
	#

	$bg_url = "/tiles/purple-stripes.png";

	$blp_convertor = "/root/Kanma-BLPConverter-3abb6b9/build/bin/BLPConverter";

	$s3_cmd = "python /root/s3cmd-1.0.1/s3cmd";
	$s3_bucket = "s3://iamcal-misc/mapcraft/v2";
