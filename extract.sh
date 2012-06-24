#!/bin/bash

/root/git-projects/MPQExtractor/build/bin/MPQExtractor \
	-e "World\Minimaps\*" -f -c -p \
	mop_mpqs/expansion1.MPQ \
	mop_mpqs/expansion2.MPQ \
	mop_mpqs/expansion3.MPQ \
	mop_mpqs/expansion4.MPQ \
	mop_mpqs/wow-update-base-15508.MPQ \
	mop_mpqs/wow-update-base-15544.MPQ \
	mop_mpqs/wow-update-base-15589.MPQ \
	mop_mpqs/wow-update-base-15640.MPQ \
	mop_mpqs/wow-update-base-15650.MPQ \
	mop_mpqs/wow-update-base-15657.MPQ \
	mop_mpqs/wow-update-base-15662.MPQ \
	mop_mpqs/wow-update-base-15668.MPQ \
	mop_mpqs/wow-update-base-15677.MPQ \
	mop_mpqs/wow-update-base-15689.MPQ \
	mop_mpqs/wow-update-base-15699.MPQ \
	mop_mpqs/wow-update-base-15726.MPQ \
	mop_mpqs/wow-update-base-15739.MPQ \
	mop_mpqs/wow-update-base-15752.MPQ \
	mop_mpqs/wow-update-base-15762.MPQ \
	mop_mpqs/wow-update-base-15781.MPQ \
	-o mop_out mop_mpqs/texture.MPQ

/root/git-projects/MPQExtractor/build/bin/MPQExtractor \
	-e "World\WMO\*" -f -c -p \
	mop_mpqs/expansion1.MPQ \
	mop_mpqs/expansion2.MPQ \
	mop_mpqs/expansion3.MPQ \
	mop_mpqs/expansion4.MPQ \
	mop_mpqs/wow-update-base-15508.MPQ \
	mop_mpqs/wow-update-base-15544.MPQ \
	mop_mpqs/wow-update-base-15589.MPQ \
	mop_mpqs/wow-update-base-15640.MPQ \
	mop_mpqs/wow-update-base-15650.MPQ \
	mop_mpqs/wow-update-base-15657.MPQ \
	mop_mpqs/wow-update-base-15662.MPQ \
	mop_mpqs/wow-update-base-15668.MPQ \
	mop_mpqs/wow-update-base-15677.MPQ \
	mop_mpqs/wow-update-base-15689.MPQ \
	mop_mpqs/wow-update-base-15699.MPQ \
	mop_mpqs/wow-update-base-15726.MPQ \
	mop_mpqs/wow-update-base-15739.MPQ \
	mop_mpqs/wow-update-base-15752.MPQ \
	mop_mpqs/wow-update-base-15762.MPQ \
	mop_mpqs/wow-update-base-15781.MPQ \
	-o mop_out mop_mpqs/world.MPQ
