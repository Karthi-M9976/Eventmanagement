<?php
	function connect(){
		
		$host = "localhost";
		$username = "root";
		$password = FALSE;
		$database = "assign2";

		$link = new mysqli($host, $username, $password, $database);
		//return the LINK
		return $link;
	}
?>