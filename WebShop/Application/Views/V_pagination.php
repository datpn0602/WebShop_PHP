
<?php 
    include_once("Application/Controllers/C_pagination.php"); 
    include_once("Application/Helper/helper_function.php");
    $c = new Pagination();
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
    $c->totalPages();
?>



    <ul class="pagination">
        <li><a href="?<?=addToURL(array("page"=>max($page-1,1)));?>#plnpt">&laquo;</a></li>
        <?php for($i = 1; $i <= $c->totalpages; $i++) {?>
        <?php $class_css = ($i == $page) ? "class='active'" : "disabled " ?>
        <li>
        <a href="?<?=addToURL(array("page"=>$i));?>#plnpt" <?=$class_css?>><?=$i;?></a>
        </li>
        <?php } ?>
        <li><a href="?<?=addToURL(array("page"=>max($page+1,$c->totalpages)));?>#plnpt">&raquo;</a></li>
    </ul>

        

