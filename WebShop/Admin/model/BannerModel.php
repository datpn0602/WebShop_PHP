<?php

include_once("config.php"); //Tạm include

class BannerModel extends config
{
	public function getBanner()
	{
		$this->setQuery("SELECT id, anh, ngay_cap_nhat FROM banner ");
		
		return $this->loadAllRows();		
	}
	public function addNewBanner($anh, $ngay)
	{
		$sql = "INSERT INTO banner( anh, ngay_cap_nhat) VALUES(?,?) ";
		$this->setQuery($sql);
		return $this->execute(array($anh, $ngay));
	}
		
	//Phương thức cập nhật thông tin nhà xuất bản. Thông tin nxb được nhận qua tham số
	public function updateBanner($anh, $id)	
	{
		$sql="UPDATE banner SET anh=? WHERE id=?";
		$this->setQuery($sql);
		return $this->execute(array($anh, $id));
	}
	//Phương thức xóa thông tin nhà xuất bản. Mã nxb cần xóa được nhận qua tham số
	public function deleteBanner($id)	
	{
		$sql="DELETE FROM banner WHERE id=?";
		$this->setQuery($sql);
		return $this->execute(array($id));
    }
    public function getBannerById($id)
	{
		$this->setQuery("SELECT id, anh, ngay_cap_nhat FROM banner WHERE id=?");
		
		return $this->loadRow(array($id));
	}
	
}
