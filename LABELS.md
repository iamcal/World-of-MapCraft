# Adding labels to the map

I'm trying to add automated labels to the maps, so they can always be updated an accurate.

* `AreaTable.dbc` contains a list of areas with labels
 * Each area has a pointer to parent the area (where there is one)
 * These contain no location data, however

* World `wdt` files contain 256 (16x16) chunks per world tile
 * Each chunk contains an areaID
 * Since `azeroth_11_22.adt` matches `azeroth/map_11_22.blp`, I can match chunks to map tiles

There are two steps to this process:

    cd build/
    php areas1.php > zones.txt
    php areas2.php > ../www/areadata.js

The first script partses the `.adt` files and outputs a map of each numbered zone and its bounds.

The second script reads `AreaTable.dbc`, recursively finds children, then outputs a JavaScript file mapping areaIDs to pixel bounds on the master map.

A custom map driver then loads these shapes:

http://worldofmapcraft.com/areas.php

The current test is loading Stormwind City (#1519), Elwynn Forest (#12) and Tirisfal Glades (#85).

An issue can clearly be seen with Elwynn - the mountains north of Stormwind are tagged as being in the forest.
While they technically are part of Elwynn, this is pretty useless for labelling; a label in the middle
of the box will be in the 'wrong' place. This could be combatted by only including child areas (for areas 
with children) as the bounding box, and just ignoring chunks tagged with the Elwynn area itself. It's not clear
if this approach would work everywhere.

Another issue can be seen with Stormwind - lots of the ocean is tagged as being part of Stormwing Harbour 
(a child area of Stormwind City), so the box extends far out to sea. A centered label would be over the harbour 
area, which while not ideal, might be fine.

With these issues, it may be better to just manually place labels. Urgh!
