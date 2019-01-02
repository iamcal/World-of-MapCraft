#!/bin/bash

# neuron-base puts it in the wrong place, because the repo-name does is not the web domain
mv /var/www/html/World-of-MapCraft /var/www/html/worldofmapcraft.com

ln -s /var/www/html/worldofmapcraft.com/site.conf /etc/apache2/sites-available/worldofmapcraft.com.conf
a2ensite worldofmapcraft.com

service apache2 reload

