


 <div class="panel panel-default row" id="plnnsx" >
                  <!-- Default panel contents -->
  <div class="panel-heading" id="plnpt" style="font-weight: bold; color: #A94646; font-size: 16px">Chi tiết sản phẩm</div>
  <div class="panel-body">
  
    <div class="row" id="chitiet<?=$productdetails->ma_sp?>">

	<div class="col-md-4 col-md-offset-1"><img src="Library/images/<?=$productdetails->hinh_anh?>"></div>
	<div class="col-md-7">
		
		<div class="info-product">
							<h1><?=$productdetails->ten_sp?> </h1>
		                   
		                    <p class="text-cart ">Giá bán : <span> <?=number_format($productdetails->don_gia,0,",",".");?></span> VND</p>
		                                        <ul class="list-unstyled">
		                        <li><i class="fa fa-check"></i><p>Bảo hành trọn đời đối với thương hiệu Diamond D</p></li>
		                        <li><i class="fa fa-check"></i><p>Bảo hành 10 năm Các thương hiệu khác thuộc hệ thống Đăng Quang Watch</p></li>
		                    </ul>
							                    	<p class="text-cart ">Năng lượng: Đồng hồ điện tử (Quartz)</p>
		                                        
		                    
		                    	       <div class="sumerian hidden-sm hidden-xs">
				                	<label for="">Mô tả sản phẩm:</label> <br><br>
				                	<article>
				                		Đồng hồ Aries Gold AG-G120B S-NUM phù hợp cho những buổi gặp gỡ đối tác nhưng vẫn đủ thời trang để đi chơi với bạn bè, bộ sưu tập cổ điển là phải có cho bất cứ ai đang tìm kiếm một chiếc đồng hồ đơn giản với một kích thước đáng nể. Được trang bị với một chiếc vòng tay bằng thép vững chắc và một khóa cài dễ dàng, chiếc đồng hồ xây dựng độ tin cậy cao và một cảm giác an toàn cho người dùng.
				                	</article>
		                    	</div>
		                                        <p class="text-cart suport-online"><span style="color:#fc0;
            font-size:14px">Hỗ trợ trực tuyến: 098.668.1189</span></p>
		                    <div class="col-lg-7 col-md-8">
		                  

		                    	<button type="button" style=" background:#f89406;" class="btn ">
		                    		<a href="?action=Themspvaogio&r=giohang&masp=<?=$productdetails->ma_sp?>#plnpt" style="font-size:14px; font-weight: bold;">Mua ngay<br>Giao hàng tận nơi hoặc nhận ở cửa hàng</a>
		                    	</button>
		                

 
		                   	</div>
		                   	
		</div>
	</div>
	<hr>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
	  <label class="control-label col-sm-2">Bình luận:</label>
	  <div class="col-sm-10" >
	 	<br>        
	    <textarea class="form-control" rows="5" id="binh_luan" name="binh_luan" value="binh_luan"></textarea>
	    <br>
	    <input type="submit" class="btn btn-default" data-dismiss="modal" value="Gửi" name="OK">
	  </div>
	</div>
</form>
	</div>
	<hr>
	<div class="panel panel-default">
      <div class="panel-heading">
            <h3 class="panel-title"></h3>
      </div>
      <div class="panel-body">
        <?php foreach($feedback as $row){?>
            <span><img src="Library/images/<?=$row->hinh_anh?>" alt="" high="30px" width="30px"> <?=$row->ten_kh?>:
			</span><span><?=$row->binh_luan?></span>
			<hr>
        <?php } ?>
      </div>
</div>

</div>



