<?php 

	class DbConnectbook
	{
		
		private $con;
	 
		
		function __construct()
		{
	 
		}
	 
	
		function connect()
		{
		
			include_once dirname(__FILE__) . '/Constantsbook.php';
	 
			
			$this->con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	 
		
			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
	 
			 
			return $this->con;
		}
	 
	}