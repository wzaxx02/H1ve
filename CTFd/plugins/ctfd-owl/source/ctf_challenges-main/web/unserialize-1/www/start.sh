#!/bin/bash

v=`cat /flag`
cat /var/www/html/flag.php | sed -i "s/flag{6b9260b1e02041a665d4e4a5117cfe16}/$v/g" /var/www/html/flag.php 


