<?php
class BannerController
{
	var $banner;
	
	public function __construct()
	{
		//Load model
		include_once("model/BannerModel.php");
		//Tạo đối tượng model
		$this->banner = new BannerModel();		
	}
	
	public function actionIndex()
	{
		include_once("index.php");
	}
	
	public function actionBanner()
	{
		//echo("sgsgsgs");
		//Controller gọi phương thức getAllNXB() của NXBMdel để lấy danh sách NXB
		$bang_banner = $this->banner->getBanner();
		
		//Load view để hiển thị dữ liệu danh sách NXB
		//include_once("views/nxb/MH_QLNXB.php");
		include_once("view/banner/banner.php");
	}

	
	public function actionAdd()
	{
		//$LoaiSanPham = $this->SanPhamModel->getAllLoaiSanPham();
		//$NhaSanXuat = $this->SanPhamModel->getAllNhaSanXuat();
			
		include_once("view/banner/thembanner.php");
		if(isset($_REQUEST["btnLuu"]))
		{
			
			$ngay_cap_nhat =  $_REQUEST["ngay_cap_nhat"];
			//$hinh_anh =  $_REQUEST["anh"];
		
			$hinhanh =$_FILES['hinhanh']['tmp_name'];
			$duongdan = $_FILES['hinhanh']['name'];
			move_uploaded_file($hinhanh, 'Library/images'.$duongdan);
    
			
			if($this->banner->addNewBanner($duongdan, $ngay_cap_nhat))
			{
				//echo("true");
				echo "<script>alert('Thông tin nhà xuất bản đã được lưu vào csdl')</script>";					
			}
			else
			{
				//echo("fksjaaaaaaaaaaaaaaaaaaaaaaa");
				echo "<script>alert('Có lỗi xảy ra!')</script>";
			}
			
			$this->actionBanner();
		}
		
		
	}
	
		public function actionEdit()
	{
		$ngay_cap_nhat = " ";
		$id= isset($_REQUEST["id"])? $_REQUEST["id"] :  "" ;
		include_once("view/banner/suabanner.php");
		if(isset($_REQUEST["btnLuu"]))
		{
			$ngay_cap_nhat =  $_REQUEST["ngay_cap_nhat"];
			$hinhanh =$_FILES['hinhanh']['tmp_name'];
			$duongdan = $_FILES['hinhanh']['name'];
			move_uploaded_file($hinhanh, 'Library/images'.$duongdan);
			if($this->banner->updateBanner($ngay_cap_nhat,$duongdan))
			{
				echo "<script>alert('Thông tin sản phẩm đã được cập nhật vào csdl')</script>";				
			}
			else
			{
				echo "<script>alert('Có lỗi xảy ra!')</script>";
			}
			//header("location:index.php?action=danhsach");
			$this->actionBanner();
		}
		else
		{
			//Tiêu đề cho Form sửa
			//$tieude = "CẬP NHẬT THÔNG TIN NHÀ XUẤT BẢN";
			//Lấy thông tin nhà xuất cần sửa để in len form
			$banner = $this->banner->getBannerById($id);
			include_once("view/banner/suabanner.php");
		}
	}

	public function actionDelete()
	{
		//kiểm tra mã hàng hóa khi kích vào btnSua xem tồn tại k
		$id =  isset($_REQUEST["id"]) ?  $_REQUEST["id"] : "";
		echo $id;
		if($this->banner->deleteBanner($id))
		{
			echo "<script>alert('Thông tin đã được xóa khỏi csdl')</script>";				
		}
		else
		{
			echo "<script>alert('Có lỗi xảy ra!')</script>";
		}
		
		$this->actionBanner();
	}
}
