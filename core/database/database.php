<?php 

date_default_timezone_set("Asia/Jakarta");

	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="web_sekolah";

	$connect=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	function query($query){
		global $connect;

		$result=mysqli_query($connect, $query);
		$rows=[];

		while($row=mysqli_fetch_assoc($result)){
			$rows[]=$row;
		}

		return $rows;
	}