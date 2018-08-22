<?php
	include_once("Database.php");  
	class M_signup extends Database
	{
		public function insertUser($hoten,$diachi,$dienthoai,$email,$gioitinh,$tendangnhap,$matkhau,$hinhanh){
			$sql = "INSERT INTO khachhang(ten_kh, dia_chi, dien_thoai, email, gioi_tinh, ten_tai_khoan, mat_khau, hinh_anh) VALUES (?,?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			return $this->execute(array($hoten,$diachi,$dienthoai,$email,$gioitinh,$tendangnhap,$matkhau,$hinhanh));
		}
		
	}
?>