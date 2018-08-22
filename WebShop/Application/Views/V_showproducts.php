
<div class="row">
	<div class="panel panel-default">
			<div class="panel-heading">
					<h3 class="panel-title">Sản phẩm bán chạy</h3>
			</div>
			<div class="panel-body">
			<div class="row">
		<?php
		foreach ($featureProducts as $row) { ?>
			<div class="col-xs-6 col-md-3">
				<div class="thumbnail">
				<i class="tag"></i>
				<a href=""><img src="Library/images/<?=$row->hinh_anh?>" alt="" high="100px" width="100px"></a>
				<div class="caption">
				<h5 class="text-center"><?=$row->ten_sp?></h5>
				<h4 class="text-center"><span ><?=number_format($row->don_gia,0,",",".");?></span></h4>
				<h4 class="text-center"><a class="btn btn-default" href="?action=ProductDetails&masp=<?=$row->ma_sp?>#plnnsx">View</a> &nbsp<a class="pa btn btn-primary" href="?action=Themspvaogio&r=giohang&masp=<?=$row->ma_sp?>&#plnpt">Add to<i class="glyphicon glyphicon-shopping-cart"></i></a> </h4>
				</div>
				</div>
			</div>
		<?php
		} 
		?>
	</div>
 	</div>
</div>
</div>
<font style="font-weight: bold; color: #A94646; font-size: 16px;" id="plnpt">
	<p href="#" class="breadcrumb">SẢN PHẨM</p>
</font>
<hr />
<div class="row">
	<?php
		foreach ($showProducts as $row) { ?>
			<div class="col-xs-6 col-md-3">
				<div class="thumbnail">
				<i class="tag"></i>
				<a href=""><img src="Library/images/<?=$row->hinh_anh?>" alt="" high="100px" width="100px"></a>
				<div class="caption">
				<h5 class="text-center"><?=$row->ten_sp?></h5>
				<h4 class="text-center"><span ><?=number_format($row->don_gia,0,",",".");?></span></h4>
				<h4 class="text-center">
				<a class="btn btn-default" href="?action=ProductDetails&masp=<?=$row->ma_sp?>#plnnsx">View</a> &nbsp
				<a class="pa btn btn-primary" href="?action=Themspvaogio&r=giohang&masp=<?=$row->ma_sp?>&#plnpt">
				Add to<i class="glyphicon glyphicon-shopping-cart"></i></a> </h4>
				</div>
				</div>
			</div>
		<?php
		} 
		?>
</div>
<h5 class="text-center"><?php include_once("V_pagination.php") ;?></h5>
