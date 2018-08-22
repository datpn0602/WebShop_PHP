<?php 

class C_login
{
	var $user;
	public function __construct(){
		include_once("Application/Models/M_login.php");
		$this->user = new M_login();
	}
	public function actionDatalogin(){
			
	        if(isset($_REQUEST['btnLogin'])){
	            $username=$_REQUEST['tendangnhap'];
	            $password=$_REQUEST['matkhau'];
	            $p=  md5(trim($password));
	            $ketqua=  $this->user->getData($username, $p);
	            if($ketqua){ 
	            	echo '<script type="text/javascript">alert("Đăng nhập thành công");</script>';
					$_SESSION['username']=$username;	
					$_SESSION['makh'] = $ketqua->ma_kh;
	              	//header("location:index.php");
	            }
	            else{
	                echo '<script type="text/javascript">alert("Tên đăng nhập hoặc mật khẩu sai");</script>';
	            }
			}
			header("location:index.php");
			include_once("Application/Views/header.php");
	     	//if(isset($_REQUEST['btnLogout'])){
			  //  unset($_SESSION['username']);
			   // unset($_SESSION['mkh']);
 	 		//}
    }
    public function actionLogout(){
	     	if(isset($_REQUEST['btnLogout'])){
			    unset($_SESSION['username']);
			   // unset($_SESSION['mkh']);
 	 		}
    }
}  
?>