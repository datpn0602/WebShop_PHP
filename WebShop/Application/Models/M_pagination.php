<?php
    class M_pagination extends Database {
    	public function getTotalRecordByMansx($mansx) {
    		$sql = "SELECT count(*) as 'Tongsodong' FROM sanpham WHERE ma_nsx=?";
			$this->setQuery($sql);
			return $this->loadRow(array($mansx));
		}
		public function getTotalRecord() {
    		$sql = "SELECT count(*) as 'Tongsodong' FROM sanpham";
			$this->setQuery($sql);
			return $this->loadRow();
		}
		public function getTotalByPrice($min, $max) {
		$sql = "SELECT count(*) as 'Tongsodong' FROM sanpham WHERE {$min} <= don_gia AND don_gia <= {$max}";
			$this->setQuery($sql);
			return $this->loadRow();
		}
    }
?>