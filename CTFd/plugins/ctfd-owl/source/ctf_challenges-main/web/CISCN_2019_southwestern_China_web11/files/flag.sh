#!/bin/bash
v=`cat /flagg`

echo "<?php \$flag='"$v"';" >> /flag


rm -f /flag.sh
