<?php 
$link = mysql_connect('hostname','dbuser','dbpassword'); 
echo 'wendy';
if (!$link) { 
	die(echo 'Could not connect to MySQL: ' . mysql_error()); 
} 
echo 'Connection OK'; mysql_close($link); 
?> 