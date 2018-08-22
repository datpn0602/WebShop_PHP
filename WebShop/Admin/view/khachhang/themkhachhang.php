<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div class="container">
  <h2>Thêm sản khách hàng mới</h2>
   <form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" >Tên khách hàng:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="text" class="form-control" id="ten_kh" placeholder="Tên khách hàng" name="ten_kh" >
      </div>
    </div>
  
    <div class="form-group">
      <label class="control-label col-sm-2">Địa chỉ:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="number" class="form-control" id="dia_chi" placeholder="Địa chỉ" name="dia_chi" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Điện thoại:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="number" class="form-control" id="dien_thoai" placeholder="Điện thoại" name="dien_thoai" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Email:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="text" class="form-control" id="email" placeholder="Email" name="email" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Giới tính:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="radio" class="form-control" id="gioi_tinh"  name="gioi_tinh" value="gioitinh">Nam
        <input type="radio" class="form-control" id="gioi_tinh"  name="gioi_tinh" value="gioitinh">Nữ
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Tên tài khoản:</label>
      <div class="col-sm-10" style="width:500px;">          
        <textarea class="form-control" rows="5" id="ten_tai_khoan" placeholder="Tên tài khoản" name="ten_tai_khoan"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Mật khẩu:</label>
      <div class="col-sm-10" style="width:500px;">          
        <textarea class="form-control" rows="5" id="mat_khau" placeholder="Mật khẩu" name="mat_khau"></textarea>
      </div>
    </div>
    <div class="form-group" style="text-align:center;">
    <button type="submit" class="btn btn-default" id="btnLuu" name="btnLuu">Lưu</button>
    <button type="button" class="btn btn-default">Thoát</button>
    </div>
  </form>
</div>
