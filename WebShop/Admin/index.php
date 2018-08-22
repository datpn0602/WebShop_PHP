<?php 
    include "config.php";
    session_start();
    ob_start();
    include "model/model.php";
    include "controller/controller.php";  
 ?>
 <?php
    //thực hiện đăng xuất:
    if(isset($_GET["act"]))
    if($_GET["act"]=="logout"){
      unset($_SESSION["loged"]);
      header("location:index.php");
    }

 ?>

<?php
    //gọi controller đăng nhập:
    include "controller/controller_login.php"; 
    ob_end_flush();
?>
 
