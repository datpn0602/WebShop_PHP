<style>
  th { text-align:center; }
</style>
<div class="container">

  <h2>Danh sách khách hàng</h2> <br/>
  <form action="?action=danhsach" method="post">
   <table class="table table-bordered">
    <thead>
      <tr style="text-align:center;">
        <th>Tên khách hàng</th>
        <!--<th>Tên loại sản phẩm</th>-->
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
        <th>Email</th>
         <th>Giới tính</th>
        <th>Tên tài khoản</th>
        <th>Mậ khẩu</th>
        <th colspan="2">Chức năng</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($bang_khachhang as $kh){?>
      <tr style="text-align:center;">
        <td><?=$kh->ten_kh?></td>
        <td><?=$kh->dia_chi?></td>
        <td><?=$kh->dien_thoai?></td>
        <td><?=$kh->email?></td>
        <td><?=$kh->gioi_tinh?></td>
        <td><?=$kh->ten_tai_khoan?></td>
        <td><?=$kh->mat_khau?></td>
	
	</td>
    <td><a href="?khachhang=deletekh&ma_kh=<?=$kh->ma_kh?>" onClick=" return confirm('Bạn có chắc chắn xóa khách hàng này không ?')" >Xóa</a></td>
    <td><a href="?khachhang=editkh&ma_kh=<?=$kh->ma_kh?>">Sửa</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  </form>
</div>
