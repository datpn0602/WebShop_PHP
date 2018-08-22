<?php
	include_once("Database.php");
	class M_giohang extends Database
	{
		public function Themspvaogio($masp){
			$sql = "SELECT ma_sp, ten_sp, don_gia, hinh_anh FROM sanpham WHERE ma_sp = ?";
			$this->setQuery($sql);
			return $this->loadRow(array($masp));
		}
		public function InsertHoadon($ten_nguoi_mua, $dia_chi, $dien_thoai, $ngay_lap){
			$sql = "INSERT INTO hoadon(ten_nguoi_mua, dia_chi, dien_thoai, ngay_lap) VALUES (?,?,?,?)";
			$this->setQuery($sql);
			return $this->execute(array($ten_nguoi_mua, $dia_chi, $dien_thoai, $ngay_lap));
		}
		public function InsertChiTietHoadon($ma_hoa_don, $ma_sp, $so_luong, $don_gia){
			$sql = "INSERT INTO chitiethoadon( ma_hoa_don, ma_sp, so_luong, don_gia) VALUES (?,?,?,?)";
			$this->setQuery($sql);
			return $this->execute(array($ma_hoa_don,$ma_sp, $so_luong, $don_gia));
		}
	}
?>