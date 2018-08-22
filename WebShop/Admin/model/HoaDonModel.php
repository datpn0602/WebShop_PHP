<?php

include_once("config.php"); //Tạm include

class HoaDonModel extends config
{
	public function getAllHoaDon()
	{
		$this->setQuery("SELECT ma_kh, ten_kh, dia_chi, dien_thoai, email, gioi_tinh, ten_tai_khoan, mat_khau FROM khachhang  ");
		
		return $this->loadAllRows();		
	}
	//Phương thức lấy chi tiết của nhà xuất bản theo mã. Mã NXB được truyền qua tham số
	public function getKhachHangById($id)
	{
		$this->setQuery("SELECT ma_kh, ten_kh, dia_chi, dien_thoai, email, gioi_tinh, ten_tai_khoan, mat_khau FROM khachhang WHERE ma_kh = ?");
		
		return $this->loadRow(array($id));
	}
	
	/*Phương thức thêm nhà xuất bản mới vào csdl. Thông tin nxb mới được nhận qua tham số
	public function addNewKhachHang($ten_kh, $dia_chi, $dien_thoai, $email, $gioi_tinh, $ten_tai_khoan, $mat_khau)
	{
		$sql = "INSERT INTO khachhang(ten_kh, dia_chi, dien_thoai, email, gioi_tinh, ten_tai_khoan, mat_khau) VALUES (?,?,?,?,?,?,?) ";
		$this->setQuery($sql);
		return $this->execute(array($ten_kh, $dia_chi, $dien_thoai, $email, $gioi_tinh, $ten_tai_khoan, $mat_khau));
	}
	*/	
	//Phương thức cập nhật thông tin nhà xuất bản. Thông tin nxb được nhận qua tham số
	public function updateKhachHang($ten_kh, $dia_chi, $dien_thoai, $email, $ten_tai_khoan, $mat_khau, $ma_kh)	
	{
		$sql="UPDATE khachhang SET ten_kh=?,dia_chi=?,dien_thoai=?,email=?,ten_tai_khoan=?,mat_khau=? WHERE ma_kh=?,";
		$this->setQuery($sql);
		return $this->execute(array($ten_kh, $dia_chi, $dien_thoai, $email, $ten_tai_khoan, $mat_khau, $ma_kh));
	}
	//Phương thức xóa thông tin nhà xuất bản. Mã nxb cần xóa được nhận qua tham số
	public function deleteKhachHang($ma_kh)	
	{
		$sql="DELETE FROM `khachhang` WHERE ma_kh = ?";
		$this->setQuery($sql);
		return $this->execute(array($ma_kh));
	}
}
