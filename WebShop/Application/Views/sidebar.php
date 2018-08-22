
   <div class="well well-small ">
   <?php
      include_once("Application/Controllers/C_giohang.php");
      $giohang = $_SESSION["giohang"]; 
    ?>
   <a id="myCart" href="?action=Themspvaogio&r=giohang&#plnpt"><img src="Library/images/ico-cart.png" alt="cart"> <?=count($giohang)?> Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a>
</div>
<div id='cssmenu'>
      <ul>
         <li class='active'><a href='?r=products&action=ShowProducts'><span>Home</span></a></li>
         <li class='has-sub'><a href='#'><span>THƯƠNG HIỆU</span></a>
            <ul>
            <?php foreach($nhasanxuat as $row){ ?>
               <li><a href="?action=ProductByMansx&mansx=<?=$row->ma_nsx?>#plnpt"><span><?=$row->ten_nsx?></span></a></li>
            <?php }?>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>KHOẢNG GIÁ</span></a>
            <ul>
               <li><a href='?action=ProductByPrice&min=0000000&max=5000000#plnpt'><span>Giá dưới 5 triệu</span></a></li>
               <li><a href='?action=ProductByPrice&min=5000000&max=10000000#plnpt'><span>Giá từ 5 - 10 triệu</span></a></li>
               <li><a href='?action=ProductByPrice&min=10000000&max=20000000#plnpt'><span>Giá từ 10 - 20 triệu</span></a></li>
               <li><a href='?action=ProductByPrice&min=20000000&max=50000000#plnpt'><span>Giá từ 20 - 50 triệu</span></a></li>
               <li class='last'><a href='#'><span>Trên 50 triệu</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>NĂNG LƯỢNG</span></a>
            <ul>
               <li><a href='#'><span>Đồng hồ cơ</span></a></li>
               <li class='last'><a href='#'><span>Đồng hồ điện tử</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>LOẠI DÂY</span></a>
            <ul>
               <li><a href='#'><span>Dây da</span></a></li>
               <li class='last'><a href='#'><span>Mạ vàng</span></a></li>
            </ul>
         </li>
         <li class='last'><a href='#'><span>LOẠI VỎ</span></a></li>
      </ul>
</div>
   <br/>
   <?php foreach($banner as $bn) {?>
        <div class="thumbnail">
         <a href=""><img src="Library/images/<?=$bn->anh?>" alt="Bootshop panasonoc New camera"/></a>
        </div><br/>
   <?php }?>
         
<script>
   ( function( $ ) {
         $( document ).ready(function() {
         $('#cssmenu > ul > li > a').click(function() {
           $('#cssmenu li').removeClass('active');
           $(this).closest('li').addClass('active');  
           var checkElement = $(this).next();
           if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
             $(this).closest('li').removeClass('active');
             checkElement.slideUp('normal');
           }
           if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
             $('#cssmenu ul ul:visible').slideUp('normal');
             checkElement.slideDown('normal');
           }
           if($(this).closest('li').find('ul').children().length == 0) {
             return true;
           } else {
             return false; 
           }      
         });
         });
         } )( jQuery );
</script>
