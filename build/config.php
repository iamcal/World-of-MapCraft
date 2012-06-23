<?php
	#
	# path where we'll extract the BLP files
	#

	$blps_raw	= "/var/www/doats.net/tiles/mop_out";
	$blps		= "/var/www/doats.net/tiles/mop_out";


	#
	# path where we'll convert BLPs to PNGs, along with URL to it
	#

	$pngs = "/var/www/doats.net/tiles/mop_pngs";
	$pngs_url = "/tiles/mop_pngs";


	#
	# path to the preview maps
	#

	$maps = "/var/www/doats.net/tiles/mop_maps";


	#
	# flat versions of composited images
	#

	$flats = "/var/www/doats.net/tiles/mop_flats";


	#
	# path to the built tilesets
	#

	$built = "/var/www/doats.net/tiles/mop_built";
	$built_url = "/tiles/mop_built";

	$crushed = "/var/www/doats.net/tiles/mop_crushed";


	#
	# other stuff
	#

	$bg_url = "/tiles/www/purple-stripes.png";

	$blp_convertor = "/root/Kanma-BLPConverter-3abb6b9/build/bin/BLPConverter";

	$s3_cmd = "python /root/s3cmd-1.0.1/s3cmd";
	$s3_bucket = "s3://iamcal-misc/mapcraft/v2";
