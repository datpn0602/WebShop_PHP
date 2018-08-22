<?php
    include_once("Application/Models/M_pagination.php");
	class Pagination
	{
		var $start;
		var $limit = 12; 
		var $totalpages;
		var $products;
		public function __construct(){
			$this->products = new M_pagination();
		}
		public function totalPages(){
			//$mansx=isset($_REQUEST['mansx']) ? $_REQUEST['mansx'] : "ma_nsx";
			$row = $this->products->getTotalRecord();
			$totalRecord = $row->Tongsodong;
			$this->totalpages = ceil($totalRecord/$this->limit);
			$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
			$this->start = ($page - 1)*$this->limit;
		}
		public function totalPagesByMansx($mansx){
			$mansx=isset($_REQUEST['mansx']) ? $_REQUEST['mansx'] : "";
			$row = $this->products->getTotalRecordByMansx($mansx);
			$totalRecord = $row->Tongsodong;
			$this->totalpages = ceil($totalRecord/$this->limit);
			$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
			$this->start = ($page - 1)*$this->limit;
		}
		public function totalPagesByPrice($min, $max){
			$min=isset($_REQUEST['min']) ? $_REQUEST['min'] : "";
			$max=isset($_REQUEST['max']) ? $_REQUEST['max'] : "";
			$row = $this->products->getTotalByPrice($min, $max);
			$totalRecord = $row->Tongsodong;
			$this->totalpages = ceil($totalRecord/$this->limit);
			$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
			$this->start = ($page - 1)*$this->limit;
		}
	}  
?>