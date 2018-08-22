<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Library/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="Library/css/website.css">
	<script src="Library/js/jquery.min.js"></script>
	<script src="Library/js/bootstrap.min.js"></script>
	<title>Trang chủ</title>
</head>
<body>
	<div class="header">
		<?php
			include_once('Application/Views/header.php'); 
		 ?>
	</div>
	<div class="container-fluid">
		<?php
			include_once('Application/Views/slideshow.php');  
		 ?>
	</div>
	<div class="main container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3">	
					<?php
						//include_once('Application/Views/sidebar.php'); 
						include_once("Application/Controllers/C_producer.php");
						$producer = new C_producer();
						$producer->getProducer();  
					
					 ?>
				</div>
				<div class="col-xs-12 col-md-9">	
					<?php
						$route = isset($_REQUEST['r']) ? $_REQUEST['r'] : 'products';
				        //var_dump($route); die;
				        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'ShowProducts';
				        include_once("Application/Controllers/C_{$route}.php");
				        $className = "C_{$route}";
				        $c = new $className;
				        $method = 'action'.$action;
				        $c->$method();  
					 ?>
				</div>
			</div>
		</div>
	</div>
			<?php
				include_once('Application/Views/footer.php'); 
			?>
</body>
</html>