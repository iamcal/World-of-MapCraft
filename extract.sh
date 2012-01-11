#!/bin/bash

/root/git-projects/MPQExtractor/build/bin/MPQExtractor \
	-e "World\Minimaps\*" -f -p \
	mpqs/wow-update-13164.MPQ,base \
	mpqs/wow-update-13205.MPQ,base \
	mpqs/wow-update-13287.MPQ,base \
	mpqs/wow-update-13329.MPQ,base \
	mpqs/wow-update-13596.MPQ,base \
	mpqs/wow-update-13623.MPQ,base \
	mpqs/wow-update-base-13914.MPQ \
	mpqs/wow-update-base-14007.MPQ \
	mpqs/wow-update-base-14333.MPQ \
	mpqs/wow-update-base-14480.MPQ \
	mpqs/wow-update-base-14545.MPQ \
	mpqs/wow-update-base-14946.MPQ \
	mpqs/wow-update-base-15005.MPQ \
	mpqs/wow-update-base-15050.MPQ \
	-o out mpqs/art.MPQ

/root/git-projects/MPQExtractor/build/bin/MPQExtractor \
	-e "World\WMO\*" -f -p \
	mpqs/expansion1.MPQ \
	mpqs/expansion2.MPQ \
	mpqs/expansion3.MPQ \
	mpqs/wow-update-13164.MPQ,base \
	mpqs/wow-update-13205.MPQ,base \
	mpqs/wow-update-13287.MPQ,base \
	mpqs/wow-update-13329.MPQ,base \
	mpqs/wow-update-13596.MPQ,base \
	mpqs/wow-update-13623.MPQ,base \
	mpqs/wow-update-base-13914.MPQ \
	mpqs/wow-update-base-14007.MPQ \
	mpqs/wow-update-base-14333.MPQ \
	mpqs/wow-update-base-14480.MPQ \
	mpqs/wow-update-base-14545.MPQ \
	mpqs/wow-update-base-14946.MPQ \
	mpqs/wow-update-base-15005.MPQ \
	mpqs/wow-update-base-15050.MPQ \
	-o out mpqs/world.MPQ
