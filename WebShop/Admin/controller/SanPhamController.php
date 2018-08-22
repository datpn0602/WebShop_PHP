<?php
class SanPhamController
{
	var $SanPhamModel;
	
	public function __construct()
	{
		//Load model
		include_once("model/SanPhamModel.php");
		//Tạo đối tượng model
		$this->SanPhamModel = new SanPhamModel();		
	}
	
	public function actionIndex()
	{
		include_once("index.php");
	}
	
	public function actionDSSP()
	{
		//echo("sgsgsgs");
		//Controller gọi phương thức getAllNXB() của NXBMdel để lấy danh sách NXB
		$bang_sanpham = $this->SanPhamModel->getAllSanPham();
		
		//Load view để hiển thị dữ liệu danh sách NXB
		//include_once("views/nxb/MH_QLNXB.php");
		include_once("view/sanpham/danhsachsanpham.php");
	}

	
	public function actionAdd()
	{
		$LoaiSanPham = $this->SanPhamModel->getAllLoaiSanPham();
		$NhaSanXuat = $this->SanPhamModel->getAllNhaSanXuat();
		include_once("view/sanpham/themsanpham.php");
		if(isset($_REQUEST["btnLuu"]))
		{
			$ten_sp =  $_REQUEST["ten_sp"];
			$ma_loai_sp =  $_REQUEST["ma_loai_sp"];
			$don_gia =  $_REQUEST["don_gia"];
			//$hinh_anh =  $_REQUEST["hinh_anh"];
			$ma_nsx = $_REQUEST["ma_nsx"];
			$so_luong = $_REQUEST["so_luong"];
			$thong_tin= $_REQUEST["thong_tin"];
			$so_luong_ban= $_REQUEST["so_luong_ban"];
			$hinh_anh = $_FILES['hinhanh']['tmp_name'];
            $duongdan = $_FILES['hinhanh']['name'];
            //print_r($_FILES);
			move_uploaded_file($hinh_anh, 'images'.$duongdan);
			if($this->SanPhamModel->addNewSanPham($ten_sp, $don_gia, $duongdan, $ma_loai_sp, $ma_nsx, $so_luong, $thong_tin, $so_luong_ban))
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
	
		public function actionEdit()
	{
			$ten_sp =  "";
			$don_gia = "";
			$so_luong = "";
			$thong_tin= "";
			$so_luong_ban= "";
		$masp= isset($_REQUEST["ma_sp"])? $_REQUEST["ma_sp"] :  "" ;
		if(isset($_REQUEST["btnLuu"]))
		{
			$ma_sp =  $_REQUEST["ma_sp"];
			$ten_sp =  $_REQUEST["ten_sp"];
			$ma_loai_sp =  $_REQUEST["ma_loai_sp"];
			$ma_nsx =  $_REQUEST["ma_nsx"];
			$don_gia =  $_REQUEST["don_gia"];
			$so_luong = $_REQUEST["so_luong"];
			$thong_tin= $_REQUEST["thong_tin"];
			$so_luong_ban= $_REQUEST["so_luong_ban"];
			
			if($this->SanPhamModel->updateSanPham($ten_sp, $don_gia, $ma_loai_sp, $ma_nsx, $so_luong, $thong_tin, $so_luong_ban,$ma_sp))
			{
				echo "<script>alert('Thông tin sản phẩm đã được cập nhật vào csdl')</script>";				
			}
			else
			{
				echo "<script>alert('Có lỗi xảy ra!')</script>";
			}
			//header("location:index.php?action=danhsach");
			$this->actionDSSP();
		}
		else
		{
			//Tiêu đề cho Form sửa
			//$tieude = "CẬP NHẬT THÔNG TIN NHÀ XUẤT BẢN";
			//Lấy thông tin nhà xuất cần sửa để in len form
			$SanPham = $this->SanPhamModel->getSanPhamById($masp);
			$LoaiSanPham = $this->SanPhamModel->getAllLoaiSanPham();
			$NhaSanXuat = $this->SanPhamModel->getAllNhaSanXuat();
			include_once("view/sanpham/suasanpham.php");
		}
	}

	public function actionDelete()
	{
		//kiểm tra mã hàng hóa khi kích vào btnSua xem tồn tại k
		$mahh =  isset($_REQUEST["ma_sp"]) ?  $_REQUEST["ma_sp"] : "";
		
		if($this->SanPhamModel->deleteSanPham($mahh))
		{
			echo "<script>alert('Thông tin sản phẩm đã được xóa khỏi csdl')</script>";				
		}
		else
		{
			echo "<script>alert('Có lỗi xảy ra!')</script>";
		}
		
		$this->actionDSSP();
	}
}
