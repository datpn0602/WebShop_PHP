<?php
    //gọi controller động:
    $duongdan_controller="";
    if(isset($_GET["controller"])){
        $duongdan_controller="controller/controller_".$_GET["controller"].".php";
        if(file_exists($duongdan_controller))
            include $duongdan_controller;
    }
    
?>

<!DOCTYPE html>
 <html>
 <head>
    <title>Trang quản trị</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="public/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

</head>

<body>
<div id="wrapper">

    <!-- start avigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">QUẢN TRỊ HỆ THỐNG</a>
        </div>
        <!-- end avigation -->


        <!-- start top menu -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Xin chào:&nbsp;<?php if(isset($_SESSION["loged"])) echo $_SESSION["loged"]; ?>'<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;Danh sách tài khoản</a>
                    </li>   
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-user"></i>&nbsp;Hồ sơ cá nhân</a>
                    </li>                        
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;Thêm tài khoản</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="index.php?act=logout"><i class="glyphicon glyphicon-off"></i>&nbsp;Đăng xuất</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- end top menu -->



        <!-- start menu left -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo_dmcc"><i class="glyphicon glyphicon-picture"></i> Sản Phẩm <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul id="demo_dmcc" class="collapse">
                        <li>
                            <a href="?action=danhsach">Quản lý sản phẩm</a>
                        </li>
                    </ul>
                </li>  
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo_kh"><i class="glyphicon glyphicon-picture"></i> Khách hàng <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul id="demo_kh" class="collapse">
                        <li>
                            <a href="?khachhang=danhsachkh">Quản lý khách hàng</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo_hd"><i class="glyphicon glyphicon-picture"></i> Hóa đơn <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul id="demo_hd" class="collapse">
                        <li>
                            <a href="">Quản lý hóa đơn</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo_bn"><i class="glyphicon glyphicon-picture"></i> Banner <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul id="demo_bn" class="collapse">
                        <li>
                            <a href="?action=danhsachBanner">Banner</a>
                        </li>
                    </ul>
                </li>

     
              <!--<li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo_dmcc"><i class="glyphicon glyphicon-picture"></i> Banner <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul id="demo_dmcc" class="collapse">
                        <li>
                            <a href="#">'Banner hiện tại'</a>
                        </li>
                    </ul>
                </li> 

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo_dm"><i class="glyphicon glyphicon-picture"></i>' Danh sách khóa học '<i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul id="demo_dm" class="collapse">
                        <li>
                            <a href="#">'Danh sách'</a>
                        </li>
                        <li>
                            <a href="#">'Thêm mới'</a>
                        </li>
                    </ul>
                </li> 

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo_dmm"><i class="glyphicon glyphicon-sunglasses"></i>' Dịch vụ của chúng tôi '<i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul id="demo_dmm" class="collapse">
                        <li>
                            <a href="#">'Danh sách'</a>
                        </li>
                        <li>
                            <a href="#">'Thêm'</a>
                        </li>
                    </ul>
                </li> 
               
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo_bv"><i class="glyphicon glyphicon-globe"></i> 'Thông tin về Devpro' <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul id="demo_bv" class="collapse">
                        
                        <li>
                            <a href="#">'Chi tiết'</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo_a1"><i class="glyphicon glyphicon-camera"></i> 'Thông tin liên hệ' <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul id="demo_a1" class="collapse">
                        
                        <li>
                            <a href="#">'Chi tiết'</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo_a2"><i class="glyphicon glyphicon-tag"></i> 'Tin nhắn học viên' <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul id="demo_a2" class="collapse">
                        <li>
                            <a href="#">'Danh sách'</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo_a456"><i class="glyphicon glyphicon-star-empty"></i> Design <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul id="demo_a456" class="collapse">
                        
                        <li>
                            <a href="#">'Để nâng cấp website, liên hệ:'</a>
                            <a href="http://facebook.com/trung.hongoc">'Hồ Ngọc Trung'</a>
                            <a href="#">0969 540 038</a>
                        </li>
                       
                    </ul>
                </li>
               
            </ul>-->
        </div>  
    </nav>
    <!-- end menu left -->
            
    <!-- start nội dung -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <?php
            include_once("controller/SanPhamController.php");
            $c = new SanPhamController();
            
            $action = isset($_REQUEST["action"])? $_REQUEST["action"] : "" ;    
            switch($action)
            {
                case "danhsach":
                    $c->actionDSSP();
                    break;
                case "add":
                    $c->actionAdd();
                    break;
                case "edit":
                    $c->actionEdit();
                    break;
                case "delete":
                    $c->actionDelete();
                    break;
                default:
                    $c->actionIndex();
            }

            include_once("controller/BannerController.php");
            $c = new BannerController();
            
            $action = isset($_REQUEST["action"])? $_REQUEST["action"] : "" ;    
            switch($action)
            {
                case "danhsachBanner":
                    $c->actionBanner();
                    break;
                case "addbn":
                    $c->actionAdd();
                    break;
                case "editbn":
                    $c->actionEdit();
                    break;
                case "deletebn":
                    $c->actionDelete();
                    break;
                default:
                    $c->actionIndex();
            }

            include_once("controller/KhachHangController.php");
            $kh = new KhachHangController();
            $khachhang = isset($_REQUEST["khachhang"])? $_REQUEST["khachhang"] : "" ; 
            switch($khachhang)
            {
                case "danhsachkh":
                    $kh->actionDSKH();
                    break;
                /*case "addkh":
                    $kh->actionAdd();
                    break;*/
                case "editkh":
                    $kh->actionEdit();
                    break;
                case "deletekh":
                    $kh->actionDelete();
                    break;
                default:
                    $kh->actionIndex();
            }
?>
        </div>
    </div>
    <!-- end nội dung -->

</div>
</body>
</html>