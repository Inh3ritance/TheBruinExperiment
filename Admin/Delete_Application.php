<?php
		session_start();
		$host = "pdb6.biz.nf";
		$servername = "2025366_tbe";
		$username = "2025366_tbe";
		$password = "#BRUINS_DATA1";
		$connect = mysqli_connect($host, $username, $password,$servername, 3306);
	
		$num = $_REQUEST['num'];
		
		if(!empty($num)){
			$sql = "DELETE FROM `Applications` WHERE `app_num` = " . $num;
			
			mysqli_query($connect, $sql);	
		}
		
		



?>