<?php session_start(); ?>
<div class="container">
	<div class="Welcome">
		Welcome! <?php  if(!empty($_SESSION['username'])) {
                            echo $_SESSION['username']; 
                        
                ?>
               <span><form action="?r=login&action=Logout" method="post"><input type="submit" class="btn btn-default" name="btnLogout" value="Thoát"></form></span>
                    <?php }?>
	</div>
<!-- Navbar ================================================== -->
	<div class="main-header">
		<nav class="navbar">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span> 
		      </button>
		      <a class="navbar-brand" href="#"><img src="Library/images/logo.png" alt=""></a>
		      <form class="navbar-form navbar-left" action="?r=products&action=SearchProduct#plnpt" method="POST">
			  <div class="input-group col-xs-12">
			    <input type="text" class="form-control" placeholder="Search" name="txtTukhoa" >
			    <div class="input-group-btn">
			      <button class="btn btn-default" type="submit" name="Tim" id="Tim" value="Tim">
			        <i class="glyphicon glyphicon-search"></i>
			      </button>
			    </div>
			  </div>
			</form>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Specials Offer</a></li>
		        <li><a href="?r=products&action=Delivery">Delivery</a></li> 
		        <li><a href="?r=products&action=Contact">Contact</a></li> 
		      </ul>
		      <ul class="nav navbar-nav navbar-right">				
		        <li><a data-toggle="modal" data-target="#myModal_dangnhap" href=""><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		        <li><a data-toggle="modal" data-target="#myModal_dangky" href=""><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		      </ul>
		    </div>
		</nav>	
	</div>
    <!-- Slide show ================================================== -->
</div>
    <!-- Navbar ================================================== -->
<form action="?r=login&action=Datalogin" method="post" enctype="multipart/form-data">
 <div id="myModal_dangnhap" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">ĐĂNG NHẬP</h4>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-5 col-md-5">Tên đăng nhập</div>
                                <div class="col-xs-7 col-md-7">
                                 <input type="text" class="form-control" name="tendangnhap" id="tendangnhap" placeholder="Tên đăng nhập ...">
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-xs-5 col-md-5">Mật khẩu</div>
                                <div class="col-xs-7 col-md-7">
                                    <input type="password" class="form-control" id="matkhau" name="matkhau" />
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-danger hide">
 
                        </div>
                        <div class="alert alert-success hide">
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-default" id="btnLogin" name="btnLogin" value="Đăng nhập">
                            <input type="submit" class="btn btn-default" data-dismiss="modal" value="Thoát">
                        </div>
                    </div>
                </div>
             </div>
</form>
<!-- Form Sign up ================================================== -->
<form action="?r=signup&action=InsertUser" method="post" enctype="multipart/form-data">
    <div id="myModal_dangky" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ĐĂNG KÝ THÀNH VIÊN</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">Họ tên:</div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="hoten" name="hoten"  />
                        </div>
                    </div>
                    <br>
                    <div class="radio row">
                        <div class="col-md-5">Giới tính: </div>
                        <div class="col-md-7">
                            <label class="radio-inline">
                                <input type="radio" name="gioitinh" value="Nam"> Nam giới
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gioitinh" value="Nữ"> Nữ giới
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">Địa chỉ:</div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="diachi" />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">Điện thoại:</div>
                        <div class="col-md-7">
                            <input type="text" class="form-control"  name="dienthoai"  />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">Email:</div>
                        <div class="col-md-7">
                            <input type="text" class="form-control"  name="email"  />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">Tên đăng nhập:</div>
                        <div class="col-md-7">
                            <input type="text" class="form-control"  name="tendangnhap"/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">Mật khẩu:</div>
                        <div class="col-md-7">
                            <input type="password" class="form-control" name="matkhau"  />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">Nhập lại mật khẩu:</div>
                        <div class="col-md-7">
                            <input type="password" class="form-control" name="matkhau_nhaplai"  />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">Avatar:</div>
                        <div class="col-md-7">
                            <input type="file" class="form-control" name="hinhanh"  />
                        </div>
                    </div>
                </div>
                <div class="alert alert-danger hide">

                </div>
                <div class="alert alert-success hide">
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-default" id="btnSignUp" name="btnSignUp" value="Đăng ký">
                    <input type="submit" class="btn btn-default" data-dismiss="modal" value="Thoát">
                </div>
            </div>
        </div>
    </div>
</form>