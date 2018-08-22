<?php 
	class controller {
		public $model;
		public function __construct(){
			//khởi tạo model:
			$this->model=new model();
		}
	}
?>