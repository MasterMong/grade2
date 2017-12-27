<?php
	include("dbConn.php");
	

	$data['recive'] = $res;
	$sql = null;
	
	$sql = "INSERT INTO `keyboardadvance` (`no`, `class`, `name`) VALUES ('" . $_GET['no'] . "', '". $_GET['class'] ."', '" . $_GET['name'] . "');";
		
	if ($conn->query($sql) === TRUE) {
		$sql = "SELECT * FROM keyboardadvance";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h1>รายชื่อคนที่ส่งงานแล้ว | <a href='/'>กลับไปที่ Teacher</a></h1>";
            while($row = $result->fetch_assoc()) {
                echo "ห้อง: 2/" . $row["class"]. " เลขที่: " . $row["no"]. " ชื่อ: " . $row["name"]. "<br>";
            }
        } else {
            echo "0 results";
        }
	} else {
		echo "bg";
	}
	$conn->close();
	
?>