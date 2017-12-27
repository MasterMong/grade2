<?php
	include("dbConn.php");
	

	$data['recive'] = $res;
	$sql = null;
	
	$sql = "INSERT INTO `keyboardadvance` (`no`, `class`, `name`) VALUES ('" . $_GET['no'] . "', '". $_GET['class'] ."', '" . $_GET['name'] . "');";
		
	if ($conn->query($sql) === TRUE) {
		echo "GG";
	} else {
		echo "bg";
	}
	$conn->close();

	$data['message'] = $message;
	$data['sql'] = $sql;
	echo $data;

	
?>