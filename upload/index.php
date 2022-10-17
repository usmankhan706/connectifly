<?php

$filelink='ChromeSetup.exe';

$filename=rand(1,1000000).''.rand(1,1000000).''.rand(1,1000000).''.rand(1,1000000);
$filename=md5($filename);

$filename=substr($filename,0,8);

$filename=$filename.'.exe';

header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . $filename);
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    readfile($filelink);



?>