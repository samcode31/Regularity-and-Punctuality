<?php
/* Mysql database class */

class DatabaseAdapter{
	
	//var to hold connection to db server
	public $conn;
	
	//var for configuration
	public $host = "localhost";
	public $username = "mu4s6wks_mthopeAdmin";
	public $password = "MHDb@dm1n18";
	
	public $database = "mu4s6wks_mthope_be";
	
	public $report_errors = TRUE;
	
	//constructor
	public function __construct(){
		
		$this->conn = new mysqli(
			$this->host,
			$this->username,
			$this->password,
			$this->database
		);
		
		if($this->conn->connect_error){
			if($this->connection->connect_error){
				//echo "Sorry, this website is experiencing problems.<br/>";
				//echo "Failed to make a MySQL connection, here is why: <br/>";
				//echo "Error No.: " . $this->connection->connect_errno . "<br/>";
				echo '<script>alert("Sorry, the website is experiencing problems.")</script>';
			
				exit;
			}
		}
			
	}
	
	//Get mysqli connection
	public function getConnection(){
		return $this->conn;
	}
	
	public function doQuery( $sqlString ){
		
		
		$results = $this->conn->query($sqlString);
		
		if(!$results){
			//error
			if ($this->report_errors) {
				// Oh no! The query failed.
				//echo '<script>alert("Sorry, the website is experiencing problems.\n Query failed to execute and here is why: \n Query: ' . $sqlString . '\n	Error No.: ' . $this->conn->errno . '\n Error: ' . $this->conn->error . '\n")</script>';
				// to get the error information
				echo '<script>alert("Sorry, the website is experiencing problems.")</script>';
				//echo "";
				//echo "";
				//echo "";
			}
			return null;
		} else {
			return $results;
		}
		
		
	}
	
	
	public function doReturnQuery($sqlString){
		
		$results = $this->conn->query($sqlString);
		$rowsAffected = $this->conn->affected_rows;
		
		if(!$results){
			//error
			if ($this->report_errors) {
				// Oh no! The query failed.
				echo '<script>alert("Sorry, the website is experiencing problems.\n Query failed to execute and here is why: \n Query: ' . $sqlString . '\n	Error No.: ' . $this->conn->errno . '\n Error: ' . $this->conn->error . '\n")</script>';
				//echo '<script>alert("Sorry, the website is experiencing problems.")</script>';
				// to get the error information
				//echo "";
				//echo "";
				//echo "";
				//echo "";
			}
			return null;
		} else {
			return $rowsAffected;
		}
	}
}



?>