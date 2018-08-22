<style>
  th { text-align:center; }

</style>
<div class="container-fluid">

  <h2>Danh sách banner</h2> <br/>
  <form action="danhsachBanner" method="post">
   <table class="table table-bordered">
    <thead>
      </tr>  
        <tr>  
            <td height="29"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td colspan="5" valign="top"><a href="?action=addbn" >Thêm banner</a> </td>
          </tr>
      </tr>
      <tr style="text-align:center;">
        <th>Ngày cập nhật</th>
        <th>Ảnh</th>
        <th colspan="2">Chức năng</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($bang_banner as $bn){?>
      <tr style="text-align:center;">
        
        <td width="200px"> <?=$bn->ngay_cap_nhat;?> </td>
        <td ><img src="Library/images/<?=$bn->anh?>" width="50px" height="80px"></td>
         <td width="36" valign="top">
	<a href="?action=editbn&id=<?=$bn->id;?>">Sửa</a>
	</td>
    <td>
    <a href="?action=deletebn&id=<?=$bn->id; ?>" onClick=" return confirm('Bạn có chắc chắn xóa không ?')" >Xóa</a>
    </td>
 
      <?php } ?>
    </tbody>
  </table>
  </form>
</div>
