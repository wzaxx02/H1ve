#!/bin/bash

v=`cat /flag`
cat /var/www/html/flag.php | sed -i "s/flag{d41d8cd98f00b204e9800998ecf8427e}/$v/" /var/www/html/flag.php 

apache2-foreground
