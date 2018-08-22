<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div class="container">
  <h2>Chi tiết khách hàng</h2>
   <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" >Tên khách hàng:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="text" class="form-control" id="ten_kh"  name="ten_kh" value="<?=$KhachHang->ten_kh?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Địa chỉ:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="text" class="form-control" id="dia_chi"  name="dia_chi" value="<?=$KhachHang->dia_chi?>" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Điện thoại:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="text" class="form-control" id="dien_thoai"  name="dien_thoai" value="<?=$KhachHang->dien_thoai?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Email:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="text" class="form-control" id="email"  name="email" value="<?=$KhachHang->email?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Giới tính:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="radio"  id="gioi_tinh"  name="gioi_tinh" value="<?=$KhachHang->gioi_tinh?>">Nam
        <input type="radio"  id="gioi_tinh"  name="gioi_tinh" value="<?=$KhachHang->gioi_tinh?>">Nữ
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Tên tài khoản:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="text" class="form-control" id="ten_tai_khoan" name="ten_tai_khoan" value="<?=$KhachHang->ten_tai_khoan?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2">Mật khẩu:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="text" class="form-control" id="mat_khau" name="mat_khau" value="<?=$KhachHang->mat_khau?>">
      </div>
    </div>
    
    <div class="form-group" style="text-align:center;">
    <button type="submit" class="btn btn-default" id="btnLuu" name="btnLuu">Lưu</button>
    <button type="button" class="btn btn-default">Thoát</button>
    </div>
  </form>
</div>
