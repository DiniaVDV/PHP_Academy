<?php

trait ConnectToDB
{
/*	private $dataBase;
	private $dsn = 'mysql:dbname=dboop;host=127.0.0.1';
	private $userDB = 'root';
	private $password = '';
		
	public function connectToDB($dataBase):PDO
	{
		return new PDO($this->dsn, $this->userDB, $this->password);
	}
*/

	private $host = '127.0.0.1';
	private $userDB = 'root';
	private $password = '';
	
	public function connectToDB($dataBase): mysqli
	{
		 $link = new mysqli($this->host, $this->userDB, $this->password, $dataBase);
		 if(mysqli_connect_errno()){
			 echo "Database connection failed: " . mysqli_connect_error();
			 exit;
		 }
		 return $link;
		 
	}
	
}