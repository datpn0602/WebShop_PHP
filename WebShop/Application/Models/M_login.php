<?php
	include_once("Database.php");  
	class M_login extends Database
	{
		public function getData($tendangnhap,$matkhau){
			$sql = "SELECT ma_kh, ten_tai_khoan, mat_khau FROM khachhang WHERE ten_tai_khoan = ? and mat_khau = ?";
			$this->setQuery($sql);
			return $this->loadRow(array($tendangnhap,$matkhau));
		}
		
	}
?>