#!/bin/bash
flag=`cat /flag`
cat /var/www/html/flag.php | sed -i "s/flag{.*}/$flag/g" /var/www/html/flag.php 


