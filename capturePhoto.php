<?php

 $date = date('YmdHis');

 $cmd = "/usr/bin/raspistill -o /var/www/html/smart/photos/";
 $cmd = $cmd. $date . ".jpg -t 1000";

$a = shell_exec($cmd);
 echo $a;
?>
