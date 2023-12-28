#!/bin/bash

v=`cat /flag`
cat /var/www/html/flag.php | sed -i "s/nsctf{taiiiiiii1_li_hai_le}/$v/" /var/www/html/flag.php 

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh