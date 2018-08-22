<?php 
	class model {
		public $connect;
		//hàm tạo:
		public function __construct(){
			global $ketnoi;
			$this->connect=$ketnoi;
		}
		//---- start duyệt các bản ghi: ------------
		public function fetch_all($query){
			//thực hiện truy vấn:
			$ketqua_truyvan=mysqli_query($this->connect,$query);
			//lưu vào 1 mảng:
			$arr=array();
			while($rows= mysqli_fetch_array($ketqua_truyvan))
				$arr[]=$rows;
			return $arr;
		}
		//---------end duyệt các bản ghi.------------
		

		// -- start duyệt 1 bản ghi: ------------------
		public function fetch_one($query){
			$ketqua_truyvan=mysqli_query($this->connect,$query);
			$row=mysqli_fetch_array($ketqua_truyvan);
			return $row;
		}
		// -- end duyệt 1 bản ghi. --------------------

		//-- start đếm số lượng bản ghi trong số lượng trả về:
		public function fetch_count($query) {
			$ketqua_truyvan=mysqli_query($this->connect,$query);
			return mysqli_num_rows($ketqua_truyvan);
		}
		//-------------------end đếm---------------------------------

		//----- start thực thi câu truy vấn:----------------------
		public function query($query){
			mysqli_query($this->connect,$query);
		}
		//------ end thực thi truy vấn --------------------
	}
 ?>