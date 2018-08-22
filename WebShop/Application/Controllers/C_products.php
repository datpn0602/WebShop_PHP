<?php
     class C_products {
     	var $products;
     	public function __construct() {
     	    include_once("Application/Models/M_products.php");
			$this->products = new M_products();
     	}
     	public function actionShowProducts() {
            include_once("C_pagination.php");
            $c = new Pagination();
			$c->totalPages();
			$featureProducts = $this->products->getFeatureProducts(1,4);
     		$showProducts = $this->products->getData($c->start,$c->limit);
     		include_once("Application/Views/V_showproducts.php");
		}
        public function actionProductDetails(){
			$masp=isset($_REQUEST['masp']) ? $_REQUEST['masp'] : "";
			$productdetails = $this->products->getProductById($masp);
			$name=isset($_SESSION['username']) ? $_SESSION['username'] : "";
			$makh=isset($_SESSION['makh']) ? $_SESSION['makh'] : "";
			//$masp=isset($_REQUEST['masp']) ? $_REQUEST['masp'] : "";
			if(isset($_REQUEST["OK"]))
			{
				$binhluan = $_REQUEST['binh_luan'];
				$this->products->insertFeedBack($masp, $makh, $name, $binhluan);
			}
			$feedback = $this->products->getDataFeedBack($masp);
			include_once("Application/Views/V_productdetails.php");
		}
		public function actionProducer() {
			$mansx=isset($_REQUEST['mansx']) ? $_REQUEST['mansx'] : "";
			include_once("Application/Models/M_nsx.php");
			$M_nsx = new M_nsx();
			$nsx = $M_nsx->getNsxById($mansx);
			include_once("C_phantrang.php");
			$c = new Phantrang();
			$c->totalPages();
				$sanpham_nsx = $this->sanpham->getSanphamByMansx($mansx,$c->start,$c->limit);
			include_once("Application/Views/V_sanpham_theo_nsx.php");
		}
		public function actionSearchProduct(){
			include_once("C_pagination.php");
			$c = new Pagination();
			$c->totalPages();
			include_once("Application/Views/header.php");
			$dk = "";
			if(isset($_REQUEST['Tim'])){
			//print_r($_REQUEST);

				if(isset($_REQUEST['txtTukhoa'])){
				$tukhoa = $_REQUEST['txtTukhoa'];
				$dk = " ten_sp LIKE '%$tukhoa%'";
				$product_search = $this->products->getSearchProduct($dk,$c->start,$c->limit);
				//print_r($sanpham_timkiem);
				}
			}	
			include_once("Application/Views/V_searchproduct.php");
		}
		public function actionProductByMansx(){
			$mansx=isset($_REQUEST['mansx']) ? $_REQUEST['mansx'] : "0";
			include_once("Application/Models/M_producer.php");
			$M_producer = new M_producer();
			$producer = $M_producer->getProducerById($mansx);
			include_once("C_pagination.php");
			$c = new Pagination();
			$c->totalPagesByMansx($mansx);
				$product_producer = $this->products->getProductByMansx($mansx,$c->start,$c->limit);
			include_once("Application/Views/V_producer.php");
		}
		public function actionProductByPrice(){
			$min=isset($_REQUEST['min']) ? $_REQUEST['min'] : "";
			$max=isset($_REQUEST['max']) ? $_REQUEST['max'] : "";
			include_once("C_pagination.php");
			$c = new Pagination();
			$c->totalPagesByPrice($min, $max);
			$productByPrice = $this->products->getProductByPrice($min, $max);
			include_once("Application/Views/V_priceproduct.php");
		}
		public function actionDelivery() {
			include_once("Application/Views/V_delivery.php");
		}
		public function actionContact() {
			include_once("Application/Views/V_contact.php");
		}
		
	} 
 ?>