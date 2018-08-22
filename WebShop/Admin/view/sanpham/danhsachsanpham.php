<style>
  th { text-align:center; }

</style>
<div class="container-fluid">

  <h2>Danh sách sản phẩm</h2> <br/>
  <form action="?action=danhsach" method="post">
   <table class="table table-bordered">
    <thead>
      </tr>  
        <tr>  
            <td height="29"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td colspan="5" valign="top"><a href="?action=add" >Thêm nhà xuất bản mới</a> </td>
          </tr>
      </tr>
      <tr style="text-align:center;">
        <th>Tên sản phẩm</th>
        <!--<th>Tên loại sản phẩm</th>-->
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Hình ảnh</th>
        <th colspan="2">Chức năng</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($bang_sanpham as $sp){?>
      <tr style="text-align:center;">
        <td><?=$sp->ten_sp;?> </td>
        
        <td><?=$sp->so_luong;?></td>
        <td width="200px"> <?=number_format($sp->don_gia,0,",",".");?> </td>
        <td ><img src="Library/images/<?=$sp->hinh_anh?>" width="50px" height="80px"></td>
         <td width="36" valign="top">
	<a href="?action=edit&ma_sp=<?=$sp->ma_sp;?>">Sửa</a>
	</td>
    <td>
    <a href="?action=delete&ma_sp=<?=$sp->ma_sp; ?>" onClick=" return confirm('Bạn có chắc chắn xóa sản phẩm không ?')" >Xóa</a>
    </td>
 
      <?php } ?>
    </tbody>
  </table>
  </form>
</div>
