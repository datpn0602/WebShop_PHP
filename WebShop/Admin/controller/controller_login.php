<?php 
	class controller_login extends controller {
		public function __construct(){
			parent::__construct();

			if(!isset($_SESSION["loged"])||$_SESSION["loged"]=="")
					include "view/login/login.php";
				else
					include "view/layout/layout.php";

			if(isset($_POST["dangnhap"]))
				$this->login();

		}

		public function login(){
			$user_name = $_POST["user_name"];
			$pass = $_POST["pass"];
			$pass = md5($pass);
			$kt_dangnhap=$this->model->fetch_one("
					select email,password,name
					from admin
					where email='$user_name'
							and password='$pass'
			");
			if($kt_dangnhap["email"]==$user_name&&$kt_dangnhap["password"]==$pass){
				$_SESSION["loged"] = $kt_dangnhap["name"];
				header("location:index.php");
			}
			else
				header("location:index.php");
		}

	}
	new controller_login();
?>
