<?php
class C_signup
{
	var $users;
	public function __construct(){
		include_once("Application/Models/M_signup.php");
		$this->users = new M_signup();
	}
	public function actionInsertUser(){
		
		if (isset($_POST['btnSignUp'])){
			$data = array();
				//INSERT INTO khachhang(ten_kh, dia_chi, dien_thoai, email, gioi_tinh, ten_tai_khoan, mat_khau
			$data['ten_kh'] = $_REQUEST["hoten"];
			$data['dia_chi'] = $_REQUEST["diachi"];
			$data['dien_thoai'] = $_REQUEST['dienthoai'];
			$data['email'] = $_REQUEST['email'];
			$data['gioi_tinh'] = $_REQUEST['gioitinh'];
			$data['ten_tai_khoan'] = $_REQUEST['tendangnhap'];
			$data['mat_khau'] = $_REQUEST['matkhau'];
			$password = md5($data['mat_khau']);
			$hinhanh =$_FILES['hinhanh']['tmp_name'];
			$duongdan = $_FILES['hinhanh']['name'];
			move_uploaded_file($hinhanh, 'Library/images'.$duongdan);
    
				// $diachi = $_REQUEST["diachi"];
				// $dienthoai = $_REQUEST["dienthoai"];
				// $email = $_REQUEST["email"];
				// $gioitinh = $_REQUEST["gioitinh"];
				// $tendangnhap = $_REQUEST["tendangnhap"];
				// $matkhau = $_REQUEST["matkhau"];
			//var_dump($data); die;
			if($this->users->insertUser($data['ten_kh'],$data['dia_chi'],$data['dien_thoai'],$data['email'],$data['gioi_tinh'],$data['ten_tai_khoan'],$password,$duongdan)){
				echo "<script>alert('Đăng ký thành công!')</script>";
				
			}
			else{
				echo "<script>alert('Có lỗi xảy ra!')</script>";	
			}
		}
		//header("location:Index.php?r=sanpham&action=Sanpham");	
		include_once("Application/Views/header.php");	
	}
}  
?>