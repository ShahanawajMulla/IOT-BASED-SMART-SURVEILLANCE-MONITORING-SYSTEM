<?php

 $date = date('YmdHis');

 $cmd = "/usr/bin/raspivid -w 640 -h 480 -o ";
 $cmd = $cmd. "/var/www/html/smart/videos/";
 $cmd = $cmd. $date . ".h264 -ex night -fps 8  -t 10000";
 $a = shell_exec($cmd);

 $cmd = "/usr/bin/MP4Box -add /var/www/html/smart/videos/";
 $cmd = $cmd. $date . ".h264 ";
 $cmd = $cmd. "/var/www/html/smart/videos/" . $date . ".mp4";
 $a = shell_exec($cmd);

unlink("/var/www/html/smart/videos/" . $date . ".h264"); 

?>
