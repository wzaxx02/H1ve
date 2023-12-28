#!/bin/bash
flag=`cat /flag`
cat /var/www/html/index.php | sed -i "s/flag{.*}/$flag/g" /var/www/html/index.php

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh