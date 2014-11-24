<?php
if($_REQUEST)
{
$cam = $_REQUEST['cam'];
if($cam == 1){
    exec('sudo /usr/bin/python /var/www/server/cam_stream/cam_stream.py');
    echo "on";
     
    }
elseif ($cam == 0){
     exec('sudo /usr/bin/python /var/www/server/cam_stream/cam_stream_stop.py');
     echo "off";
    }
else
     echo "can't dtermine state";
}
?>
