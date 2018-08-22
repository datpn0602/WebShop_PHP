<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div class="container">
  <h2>Thêm sản phẩm mới</h2>
   <form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" >Tên sản phẩm:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="text" class="form-control" id="ten_sp" placeholder="Tên sản phẩm" name="ten_sp" >
      </div>
    </div>
    <div class="form-group">
        <label for="type" class="col-sm-2 control-label">Loại sản phẩm:</label>
        <div class="col-sm-10" style="width:500px;">
            <div class="fg-line">
                <select class="form-control" id="ma_loai_sp" name="ma_loai_sp" title="Chọn loại sản phẩm">
                <?php foreach ($LoaiSanPham as $Loai) { ?>
                   <option value='<?=$Loai->ma_loai_sp?>'><?=$Loai->loai_dong_ho?></option>
                  <?php } ?>
                </select>
            </div>
        </div>
     </div>
      <div class="form-group">
        <label for="type" class="col-sm-2 control-label">Nhà sản xuất:</label>
        <div class="col-sm-10" style="width:500px;">
            <div class="fg-line">
                <select class="form-control" id="ma_nsx" name="ma_nsx" title="Chọn nhà sản xuất">
                <?php foreach ($NhaSanXuat as $nsx) { ?>
                  <option value='<?=$nsx->ma_nsx?>'><?=$nsx->ten_nsx?></option>
                 <?php } ?>
                </select>
            </div>
        </div>
     </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Số lượng:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="number" class="form-control" id="so_luong" placeholder="Số lượng" name="so_luong" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Giá:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="number" class="form-control" id="don_gia" placeholder="Giá" name="don_gia" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Số lượng bán:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="text" class="form-control" id="so_luong_ban" placeholder="Số lượng bán" name="so_luong_ban" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Hình ảnh:</label>
      <div class="col-sm-10" style="width:500px;">          
        <input type="file" class="form-control" id="hinhanh" placeholder="Số lượng bán" name="hinhanh" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Mô tả:</label>
      <div class="col-sm-10" style="width:500px;">          
        <textarea class="form-control" rows="5" id="thong_tin" placeholder="Mô tả" name="thong_tin"></textarea>
      </div>
    </div>
    <div class="form-group" style="text-align:center;">
    <button type="submit" class="btn btn-default" id="btnLuu" name="btnLuu">Lưu</button>
    <button type="button" class="btn btn-default">Thoát</button>
    </div>
  </form>
</div>
