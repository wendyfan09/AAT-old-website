<?php
$conn_error = 'Could not connect';
$mysql_host = '68.178.217.43';
$mysql_user = 'aat_educators';
$mysql_pass = 'Bri11i@nce!';

$mysql_db = 'aat_educators';

if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!@mysql_select_db($mysql_db)) {
   die($conn_error);
}
?> 