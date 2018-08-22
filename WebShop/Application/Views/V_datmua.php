
<div class="panel panel-default row" >
                  <!-- Default panel contents -->
        
        <font style="font-weight: bold; color: #A94646" id="plnpt">
            <p href="#" id="plnpt" class="breadcrumb">GIỎ HÀNG</p>
        </font>

        
        <div class="panel-body">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="table-responsive">
                <form name="frmGiohang" method="post" action="" id="frmGiohang">
                  <table class="table">
                    <tr class="info">
                        <td>STT</td>
                        <td>Tên sản phẩm</td>
                        <td>Giá</td>
                        <td>Số lượng</td>
                        <td>Thành tiền </td>
                        <td>Xóa</td>
                    </tr>
                    <?php $i=1; $tongcong = 0;include_once("Application/Helper/helper_function.php");?>
                    <?php foreach($giohang as $row){ ?>
                    <tr>
                        <td><?=$i++?></td>
                        <td><?=$row[1]?></td>
                        <td><?=number_format($row[3],0,",",".");?> VND</td>
                        <td><input name="txtsl<?=$row[0]?>" type="text" class="form-control"  style="width:50px"  value="<?=$row[2];?>" /></td>
                        <td><?=number_format($row[2]*$row[3],0,",",".");?> VND</td>
                        <td><a href="?<?=addToURL(array("action"=>"XoaSpTrongGio","masp"=>$row[0]))?>" onClick=" return confirm('Bạn có chắc chắn xóa ?')">Xóa</a></td> 
                    </tr>
                    <?php $tongcong = $tongcong + $row[2]*$row[3];} ?>
                    <tr>
                        <td colspan="6">Tổng tiền : <?=number_format($tongcong,0,",",".");?> VND </td>
                    </tr>
                    <tr>
                        <td colspan="6"><a href="#plnpt" onClick="capnhatgiohang_onclick()">Cập nhật giỏi hàng</a></td>
                    </tr>
                  </table>
                </form>
                <script>
                  function capnhatgiohang_onclick()
                  {
                    frmGiohang = document.getElementById('frmGiohang');
                    frmGiohang.action = "?action=CapNhatSoLuong&r=giohang";
                    frmGiohang.submit();// Gui du lieu cua form ve server
                  }
                </script>
                               
                <a data-toggle="modal" data-target="#myModal_thanhtoan" href=""> 
                                <button class="btn btn-successful text-">
                                    <span>Thanh toán</span>
                                </button>
                </a> 


                <form action="?r=giohang&action=HoaDon" method="post">
                <div id="myModal_thanhtoan" class="modal fade" role="dialog">
                <div class="modal-dialog">
 
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">THANH TOÁN</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5">Họ tên:</div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="ten_nguoi_mua" name="ten_nguoi_mua"  />
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5">Địa chỉ:</div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control"  name="dia_chi" />
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5">Điện thoại:</div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="dien_thoai"  />
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5">Ngày lập:</div>
                                <div class="col-md-7">
                                    <input type="date" class="form-control"  name="ngay_lap"  />
                                </div>
                            </div>
                            
                        </div>
                        <div class="alert alert-danger hide">
 
                        </div>
                        <div class="alert alert-success hide">
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-default" id="btnLuu" name="btnLuu" value="Xác nhận">
                            <input type="submit" class="btn btn-default" data-dismiss="modal" value="Thoát">
                        </div>
                    </div>
                </div>
                 </div>
                 </form>
             </div>
            </div>
            </div>
        </div>  
    </div>