<?php

//test function
function add($x,$y){
	$total=$x+$y;
	return $total;
}

//list entries from DB
function listEntries(){
	$con = mysql_connect("localhost","root","root");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("admin", $con);

	$result = mysql_query("SELECT * FROM admin");

	// echo 'Results: <br/>';
	$output = '';
	while($row = mysql_fetch_array($result))
	  {
	  $output .= $row['id'] . " " . $row['name'] . " " . $row['age'];
	  $output .= "<br />";
	  }

	mysql_close($con);
	return $output;
}
?>