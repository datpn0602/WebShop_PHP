<?php
	if(!isset($_SESSION["giohang"])){
				$_SESSION["giohang"] = array();
			}
	class C_giohang
	{
		var $sanpham;
		public function __construct(){
			include_once("Application/Models/M_giohang.php");
			$this->sanpham = new M_giohang();
			
		}
		public function actionThemspvaogio(){
			$masp = isset($_REQUEST["masp"]) ? $_REQUEST["masp"] : ""; 
			$giohang = $_SESSION["giohang"];
			if(isset($giohang[$masp])){
				$giohang[$masp][2] += 1;
			}else{
				$result = $this->sanpham->Themspvaogio($masp);
				if(!empty($result)){
					$tensanpham = $result->ten_sp;
					$dongia = $result->don_gia;
					$giohang[$masp] =  array($masp, $tensanpham, 1, $dongia);
				}
			}
			include_once("Application/Views/V_datmua.php");
			$_SESSION["giohang"] = $giohang;
		}
		//$_SESSION["giohang"]["111"] = array("111", "Iphone 7s", 2, 21500000);
		//$_SESSION["giohang"]["222"] = array("222", "Samsung Galaxy s8 edge", 3, 20900000);
		//$_SESSION["giohang"]["666"] = array("666", "OPPO F3", 5, 6400000);
		//$_SESSION["giohang"]["888"] = array("888", "HTC One X", 4, 5800000);
		
		/*$giohang["111"] = array("111", "Iphone 7s", 2, 21500000);
		$giohang["222"] = array("222", "Samsung Galaxy s8 edge", 3, 20900000);
		$giohang["666"] = array("666", "OPPO F3", 5, 6400000.234);
		$giohang["888"] = array("888", "HTC One X", 4, 5800000);	
		$_SESSION["giohang"] = $giohang;	*/
		public function actionCapNhatSoLuong()
		{	
			$giohang = $_SESSION["giohang"];

			foreach($giohang as $row){
				$masp =$row[0];
				$giohang[$masp][2] = $_REQUEST["txtsl{$masp}"];
				//echo $_REQUEST["txtsl{$masp}"];
			
			}
			$_SESSION["giohang"] = $giohang;
			include_once("Application/Views/V_datmua.php");
		}
		public function actionHoaDon()
		{
			$masp = isset($_REQUEST["masp"]) ? $_REQUEST["masp"] : ""; 
			$giohang = $_SESSION["giohang"];
			//$this->sanpham->InsertChiTietHoadon($giohang[$masp][1],$giohang[$masp][2],$giohang[$masp][3]);
			
			//print_r($giohang[0]);
			//echo $giohang[0];
				//print_r($row[0][1]);
			
	
			
			//print_r($_REQUEST); echo "<br>";
			//print_r($giohang);
			include_once("Application/Views/V_datmua.php");
			if(isset($_REQUEST["btnLuu"]))
			{
				
				$ten_nguoi_mua =  $_REQUEST["ten_nguoi_mua"];
				$dia_chi =  $_REQUEST["dia_chi"];
				$dien_thoai =  $_REQUEST["dien_thoai"];
				$ngay_lap =  $_REQUEST["ngay_lap"];
	            //$khachhang = $this->sanpham->getMakh();
	            //$ma_kh = $khachhang->ma_kh;
	            //print_r($khachhang);
	            //echo $ma_kh;
	            //print_r($_REQUEST);
				if($this->sanpham->InsertHoadon($ten_nguoi_mua, $dia_chi, $dien_thoai, $ngay_lap))
				{
					$ma_hoa_don = $this->sanpham->getLastId();

					$giohang = $_SESSION["giohang"];
					foreach($giohang as $row){						
						$this->sanpham->InsertChiTietHoadon($ma_hoa_don,$row[0],$row[2],$row[3]);					
					}

					unset($_SESSION["giohang"]);

					echo "<script>alert('Thông tin hóa đơn đã được lưu vào csdl')</script>";
					//header("location:Index.php");					
				}
				else
				{
					echo "<script>alert('Có lỗi xảy ra!')</script>";
				}
				//$this->sanpham->InsertChiTietHoadon($mahoadon)
				//include_once("Application/Views/V_datmua.php");
				//header_remove("location:Index.php?r=sanpham&action=Sanpham");
			}					
		}

		public function actionXoaSpTrongGio()
		{
			//Nhan ma sp xoa khoi gio hang
			$masp = isset($_REQUEST["masp"]) ? $_REQUEST["masp"] : "";
			unset($_SESSION["giohang"][$masp]);
			//header('location:V_datmua.php');
		}
	}  
?>