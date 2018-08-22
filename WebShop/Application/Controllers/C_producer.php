<?php
class C_producer
{
	var $producer;
	public function __construct(){
		include_once("Application/Models/M_producer.php");
		$this->producer = new M_producer();
	}
	public function getProducer(){
		$nhasanxuat = $this->producer->getAllProducer();
		$banner = $this->producer->getBanner();
		//include_once("Application/Views/navbar.php");
		include_once("Application/Views/sidebar.php");
		//include_once("Application/Views/V_giohang.php");

	}
	
} 
 ?>