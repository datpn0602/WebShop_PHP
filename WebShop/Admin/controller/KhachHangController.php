<?php
class KhachHangController
{
	var $KhachHangModel;
	
	public function __construct()
	{
		//Load model
		include_once("model/KhachHangModel.php");
		//Tạo đối tượng model
		$this->KhachHangModel = new KhachHangModel();		
	}
	
	public function actionIndex()
	{
		include_once("index.php");
	}
	
	public function actionDSKH()
	{
		//echo("sgsgsgs");
		//Controller gọi phương thức getAllNXB() của NXBMdel để lấy danh sách NXB
		$bang_khachhang = $this->KhachHangModel->getAllKhachHang();
		
		//Load view để hiển thị dữ liệu danh sách NXB
		//include_once("views/nxb/MH_QLNXB.php");
		include_once("view/khachhang/danhsachkhachhang.php");
	}
	/*
	
	public function actionAdd()
	{
		//ma_kh, ten_kh, dia_chi, dien_thoai, email, gioi_tinh, ten_tai_khoan, mat_khau
		include_once("view/khachhang/themkhachhang.php");
		if(isset($_REQUEST["btnLuu"]))
		{
			$ten_kh =  $_REQUEST["ten_kh"];
			$dia_chi =  $_REQUEST["dia_chi"];
			$dien_thoai =  $_REQUEST["dien_thoai"];
			$email =  $_REQUEST["email"];
			$gioi_tinh = $_REQUEST["gioi_tinh"];
			$ten_tai_khoan = $_REQUEST["ten_tai_khoan"];
			$mat_khau= $_REQUEST["mat_khau"];
			if($this->SanPhamModel->addNewSanPham($ma_kh, $ten_kh, $dia_chi, $dien_thoai, $email, $gioi_tinh, $ten_tai_khoan, $mat_khau))
			{
				//echo("true");
				echo "<script>alert('Thông tin nhà xuất bản đã được lưu vào csdl')</script>";					
			}
			else
			{
				//echo("fksjaaaaaaaaaaaaaaaaaaaaaaa");
				echo "<script>alert('Có lỗi xảy ra!')</script>";
			}
			
			$this->actionDSSP();
		}
		
		
	}
	*/
		public function actionEdit()
	{
		$ma_kh= isset($_REQUEST["ma_kh"])? $_REQUEST["ma_kh"] :  "" ;
		if(isset($_REQUEST["btnLuu"]))
		{
			$ten_kh =  $_REQUEST["ten_kh"];
			$dia_chi =  $_REQUEST["dia_chi"];
			$dien_thoai =  $_REQUEST["dien_thoai"];
			$email =  $_REQUEST["email"];
			//$gioi_tinh = $_REQUEST["gioi_tinh"];
			$ten_tai_khoan = $_REQUEST["ten_tai_khoan"];
			$mat_khau= $_REQUEST["mat_khau"];
			
			if($this->KhachHangModel->updateKhachHang($ten_kh, $dia_chi, $dien_thoai, $email, $ten_tai_khoan, $mat_khau, $ma_kh))
			{
				echo "<script>alert('Thông tin khách hàng đã được cập nhật vào csdl')</script>";				
			}
			else
			{
				echo "<script>alert('Có lỗi xảy ra!')</script>";
			}
			//header("location:index.php?action=danhsach");
			$this->actionDSKH();
		}
		else
		{
			$KhachHang = $this->KhachHangModel->getKhachHangById($ma_kh);
			
			include_once("view/khachhang/suakhachhang.php");
		}
	}

	public function actionDelete()
	{
		//kiểm tra mã hàng hóa khi kích vào btnSua xem tồn tại k
		$makh =  isset($_REQUEST["ma_kh"]) ?  $_REQUEST["ma_kh"] : "";
		//echo $makh;
		if($this->KhachHangModel->deleteKhachHang($makh))
		{
			echo "<script>alert('Thông tin khách hàng đã được xóa')</script>";			
		}
		else
		{
			echo "<script>alert('Có lỗi xảy ra!')</script>";
		}
		
		$this->actionDSKH();
	}
}
