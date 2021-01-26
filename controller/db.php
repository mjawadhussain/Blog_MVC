<?php 
  class Database
  {
  protected $servername = "localhost";
  protected $username   = "root";
  protected $password   =  "";
  protected $dbName     =  "blog";
  public    $conn;
  public function __construct()
  {
  		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbName);
			if ($conn->connect_error) {
			}
		$this->conn = $conn;
     }

     	public function getConnection()
		{
			return $this->conn;
		}

  }