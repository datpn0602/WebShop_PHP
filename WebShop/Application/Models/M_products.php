<?php
	include_once("Database.php");
	class M_products extends Database
	{
		public function getData($start, $limit){
			$sql = "SELECT  ma_sp, ten_sp, don_gia, hinh_anh FROM sanpham limit {$start},{$limit}";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		
		public function getSanpham($mansx,$limit = 0, $start = 0){
			$str_limit = '';
			if ($limit>0) {
				$str_limit = " LIMIT $start,$limit ";
			}
			$sql = "SELECT  ma_sp, ten_sp, don_gia, hinh_anh FROM sanpham WHERE ma_nsx='$mansx' $str_limit";
			$this->setQuery($sql);
			return $this->loadAllRows();
			}
		public function getProductByProducer($mansx, $start, $limit){
			$sql = "SELECT  ma_sp, ten_sp, don_gia, hinh_anh FROM sanpham WHERE ma_nsx='$mansx' limit {$start},{$limit}";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		public function getFeatureProducts($start, $limit) {
			$sql = "SELECT ma_sp, ten_sp, don_gia, hinh_anh, so_luong_ban FROM sanpham ORDER BY so_luong_ban DESC limit {$start},{$limit} ";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		public function getProductById($masp){
			$sql = "SELECT  ma_sp, ten_sp, don_gia, hinh_anh, thong_tin FROM sanpham WHERE ma_sp = ?";
			$this->setQuery($sql);
			return $this->loadRow(array($masp));
		}
		public function getProducer() {
			$sql="SELECT ten_nsx FROM nhasx";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		public function getProductByMansx($mansx, $start, $limit){
			$sql = "SELECT  ma_sp, ten_sp, don_gia, hinh_anh FROM sanpham WHERE ma_nsx='$mansx' limit {$start},{$limit}";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		public function getTenLoaiSP($maloaisp){
			$sql = "SELECT ma_loai_sp, loai_dong_ho FROM loaisp WHERE ma_loai_sp = ?";
			$this->setQuery($sql);
			return $this->loadRow(array($maloaisp));
		}
		public function getSearchProduct($dk, $start, $limit){
			if($dk!="")
				$dk = " WHERE {$dk}";
			$sql = "SELECT  ma_sp, ten_sp, don_gia, hinh_anh FROM sanpham {$dk} limit {$start},{$limit}";
			//echo " $sql";
			$this->setQuery($sql);
			return $this->loadAllRows(array($dk, $start, $limit));
		}
		public function getProductByPrice($min, $max){
			$sql = "SELECT  ma_sp, ten_sp, don_gia, hinh_anh FROM sanpham WHERE {$min} <= don_gia AND don_gia <= {$max} ";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		public function getDataFeedBack($masp){
			$sql = "SELECT khachhang.hinh_anh, ma_binh_luan, khachhang.ten_kh, ma_sp, binh_luan, khachhang.ma_kh FROM binhluan inner join khachhang on khachhang.ma_kh=binhluan.ma_kh WHERE ma_sp = ?";
			$this->setQuery($sql);
			return $this->loadAllRows(array($masp));
        }
        public function insertFeedBack($masp, $makh, $name, $binhluan){
			$sql = "INSERT INTO binhluan( ma_sp, ma_kh, ten_kh, binh_luan) VALUES(?,?,?,?) ";
            $this->setQuery($sql);
            return $this->execute(array( $masp, $makh, $name, $binhluan));
		}
		
		
	}  
?>