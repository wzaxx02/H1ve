#!/bin/bash

v=`cat /flag`
cat /var/www/html/flag.php | sed -i "s/flag{you_are_get_me}/$v/g" /var/www/html/flag.php 

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
