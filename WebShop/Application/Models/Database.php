<?php
	class Database
	{
		var $conn = "";
		var $sql = "";
		var $cursor = "";
		public function __construct($hostname = "localhost", $dbname = "shop_dongho", $user = "root", $pass = "" ){
			try{
				$this->conn = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8","$user","$pass");
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e){
				exit("Not connect");
			}
		}

		public function setQuery($sql){
			$this->sql = $sql;
		}

		public function execute($option = array()){
			try{
				$this->cursor = $this->conn->prepare($this->sql);
				$this->cursor->execute($option);
				return $this->cursor;
			}
			catch(PDOException $e){
				return false;
			}
		}

		public function loadAllRows($options = array()){
			if(!$options){
				if (!$result = $this->execute())				
					return false;			
			}
			else {
				if (!$result = $this->execute($options))
					return false;
			}
			
			return $result->fetchAll(PDO::FETCH_OBJ);
		}

		public function loadRow($options = array()){
			if(!$options){
					if (!$result = $this->execute())
						return false;
			}
			else {
				if (!$result = $this->execute($options))
					return false;
			}
				return $result->fetch(PDO::FETCH_OBJ);
		}
		
		public function getLastId()	{	
			return $this->conn->lastInsertId();
		}
	}  
?>