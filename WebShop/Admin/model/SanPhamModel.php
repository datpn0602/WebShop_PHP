<?php

include_once("config.php"); //Tạm include

class SanPhamModel extends config
{
	public function getAllSanPham()
	{
		$this->setQuery("SELECT ma_sp, ten_sp, don_gia, hinh_anh, ma_loai_sp, ma_nsx, so_luong, thong_tin, so_luong_ban, chi_tiet_sp, khuyen_mai FROM sanpham ");
		
		return $this->loadAllRows();		
	}
	public function getAllLoaiSanPham(){
		$this->setQuery("SELECT ma_loai_sp, loai_dong_ho FROM loaisp ");
		
		return $this->loadAllRows();
	}
	public function getAllNhaSanXuat(){
		$this->setQuery("SELECT ma_nsx, ten_nsx, show_nsx FROM nhasx ");
		
		return $this->loadAllRows();
	}
	//Phương thức lấy chi tiết của nhà xuất bản theo mã. Mã NXB được truyền qua tham số
	public function getSanPhamById($id)
	{
		$this->setQuery("SELECT ma_sp, ten_sp, don_gia, hinh_anh, ma_loai_sp, ma_nsx, so_luong, thong_tin, so_luong_ban, chi_tiet_sp, khuyen_mai FROM sanpham WHERE ma_sp=?");
		
		return $this->loadRow(array($id));
	}
	
	//Phương thức thêm nhà xuất bản mới vào csdl. Thông tin nxb mới được nhận qua tham số
	public function addNewSanPham($ten_sp, $don_gia, $hinh_anh, $ma_loai_sp, $ma_nsx, $so_luong, $thong_tin, $so_luong_ban)
	{
		$sql = "INSERT INTO sanpham( ten_sp, don_gia, hinh_anh, ma_loai_sp, ma_nsx, so_luong, thong_tin, so_luong_ban) VALUES(?,?,?,?,?,?,?,?) ";
		$this->setQuery($sql);
		return $this->execute(array($ten_sp, $don_gia, $hinh_anh, $ma_loai_sp, $ma_nsx, $so_luong, $thong_tin, $so_luong_ban));
	}
		
	//Phương thức cập nhật thông tin nhà xuất bản. Thông tin nxb được nhận qua tham số
	public function updateSanPham($ten_sp, $don_gia, $ma_loai_sp, $ma_nsx, $so_luong, $thong_tin, $so_luong_ban, $ma_sp)	
	{
		$sql="UPDATE sanpham SET ten_sp=?,don_gia=?,ma_loai_sp=?,ma_nsx=?,so_luong=?,thong_tin=?,so_luong_ban=? WHERE ma_sp=?";
		$this->setQuery($sql);
		return $this->execute(array($ten_sp, $don_gia, $ma_loai_sp, $ma_nsx, $so_luong, $thong_tin, $so_luong_ban,$ma_sp));
	}
	//Phương thức xóa thông tin nhà xuất bản. Mã nxb cần xóa được nhận qua tham số
	public function deleteSanPham($ma_sp)	
	{
		$sql="DELETE FROM sanpham WHERE ma_sp=?";
		$this->setQuery($sql);
		return $this->execute(array($ma_sp));
	}
}
