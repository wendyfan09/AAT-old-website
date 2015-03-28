<?php
require 'connect.inc.php';
?>

<form action = "index.php" method = "GET">
	Choose a table:
	<select name = "AE">
	<option value ="A">Ambassador</option>
	<option value ="E">Educators</option>
	<option value ="V">Vettor</option>
	</select><br><br>
	<input type = "submit" value = "Submit">
</form>
<?php
if (isset($_GET['AE'])&&!empty($_GET['AE'])){
	$tablename = $_GET['AE'];
	if($tablename =='A'){
		$tablename = 'Ambassador';
			$query = "SELECT `Name`,`Phone`,`Email` FROM `Ambassador` ORDER BY `ID`";
    if ($query_run = mysql_query($query)) {

	    while($query_row = mysql_fetch_assoc($query_run)){
		$Name = $query_row['Name'];
		$Phone = $query_row['Phone'];
		$Email = $query_row['Email'];

		echo $Name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$Phone.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$Email.'</br>';
	    }
    }else{
	    echo mysql_error();
    }

}elseif($tablename == 'E'){
		$tablename = 'Educators';
			$query = "SELECT `Title`,`First Name`,`Last Name`,`Email`,`University`,`Position/Department`,`Date Sent`,`Status` FROM `Educators` ORDER BY `ID`";
    if ($query_run = mysql_query($query)) {

	    while($query_row = mysql_fetch_assoc($query_run)){
	    $Title = $query_row['Title'];
		$Firstname = $query_row['First Name'];
		$Lastname = $query_row['Last Name'];
		$Email = $query_row['Email'];
		$University = $query_row['University'];
		$Position = $query_row['Position/Department'];
		$Date = $query_row['Date Sent'];
		$Status = $query_row['Status'];

		echo $Title.$Firstname.'&nbsp;'.$Lastname.'</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$Email.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$University.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$Position.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$Date.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$Status.'</br>';
	    }
    }else{
	    echo mysql_error();
    }
}elseif($tablename == 'V'){
	    $tablename = 'Vettor';
			$query = "SELECT `Title`,`Name`,`Email`,`University`,`Field`,`Area` FROM `Vettor` ORDER BY `ID`";
    if ($query_run = mysql_query($query)) {

	    while($query_row = mysql_fetch_assoc($query_run)){
	    $Title = $query_row['Title'];
		$Name = $query_row['Name'];
		$Email = $query_row['Email'];
		$University = $query_row['University'];
		$Field = $query_row['Field'];
		$Ared = $query_row['Area'];

		echo $Title.$Name.'&nbsp;</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$Email.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$University.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$Field.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$Area.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>';
	    }
    }else{
	    echo mysql_error();
    }
}
}
 

?> 