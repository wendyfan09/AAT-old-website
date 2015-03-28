<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("admin", $con);

$result = mysql_query("SELECT * FROM admin");

$output = "";

while($row = mysql_fetch_array($result))
  {
  $output .= $row['id'] . " " . $row['name'] . " " . $row['age'];
  $output .= "<br />";
  }

if($output == ""){
	$output = "No results found!";
}

echo $output;
mysql_close($con);
?>