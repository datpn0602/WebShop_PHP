<h2>Thêm Banner</h2>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" >Ngày cập nhật:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="text" class="form-control" id="ngay_cap_nhat" placeholder="Ngày cập nhật" name="ngay_cap_nhat" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2">Hình ảnh:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="file" class="form-control" id="hinhanh"  name="hinhanh" >
      </div>
    </div>
    <div class="form-group" style="text-align:center;">
    <button type="submit" class="btn btn-default" id="btnLuu" name="btnLuu">Lưu</button>
    <button type="button" class="btn btn-default">Thoát</button>
    </div>
  </form>