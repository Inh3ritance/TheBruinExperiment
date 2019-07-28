<?php
	
		$host = "pdb6.biz.nf";
		$servername = "2025366_tbe";
		$username = "2025366_tbe";
		$password = "#BRUINS_DATA1";
		$connect = mysqli_connect($host, $username, $password,$servername, 3306);
		
		$footer = $_REQUEST['footer'];
		
		$sql = "UPDATE `Application_Info` SET `Footer` = '" . $footer . "' WHERE `Application_Info`.`Num` = 0";
		
		mysqli_query($connect, $sql);
	
	
?>