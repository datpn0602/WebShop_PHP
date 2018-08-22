<!DOCTYPE html>
 <html>
 <head>
    <title>Trang quản trị</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

</head>

<body>
	<form action="" method="post">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
		    <div class="panel-body">
		    	<div class="form-group">
					<label for="email">Email:</label>
					<input required type="text" class="form-control" name="user_name" placeholder="Nhập tên đăng nhập...">
				</div>
	 
				<div class="form-group">
					<label for="pwd">Mật khẩu: </label>
					<input required type="password" class="form-control" name="pass" placeholder="Nhập mật khẩu...">
				</div>
	 
				<button type="submit" class="btn btn-default" name="dangnhap">Đăng nhập</button>
		    </div>
		</div>
	</div>
	</form>
</body>
</html>