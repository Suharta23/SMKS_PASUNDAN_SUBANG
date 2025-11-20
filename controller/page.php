<?php 
	
	
	function komponen($com){
		include "komponen/$com.php";
	}
	komponen("tag_random");

	if (!isset($page)) {

		include "beranda/c_beranda.php";

	}else{

		if (isset($file)) {

			include "$page/c_$file.php";

		}else{

			include "$page/c_$page.php";
			
		}

	}

 ?>