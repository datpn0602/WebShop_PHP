<?php
	include_once("Database.php");
	class M_producer extends Database
	{
		public function getAllProducer(){
			$sql = "SELECT ma_nsx, ten_nsx, show_nsx FROM nhasx WHERE show_nsx=1";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		
		public function getProducerById($mansx){
			$sql = "SELECT ma_nsx, ten_nsx, show_nsx FROM nhasx WHERE ma_nsx=?";
			$this->setQuery($sql);
			return $this->loadRow(array($mansx));
		}
		public function getBanner(){
			$sql = "SELECT  anh FROM banner";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
	}  
?>
