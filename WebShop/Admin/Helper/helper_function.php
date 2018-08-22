<?php 
function addToURL($key_value=array(), $curQueryString="") {
	//Nếu không truyền vào chuỗi QueryString, sẽ lấy Query String hiện tại được đính kèm url
	if($curQueryString=="")	
		$curQueryString = $_SERVER['QUERY_STRING'];
	//chuyển chuỗi 	$curQueryString thành mảng $params (mảng kết hợp key/value )
	parse_str($curQueryString,$params);
	
	//Duyệt từng phần tử trong mảng $params, nếu tồn tại key thì cập nhật, chưa có thì thêm vào cuối mảng
	foreach($key_value as $key => $value)			
		$params[$key] = $value;
	
	//sử dụng hàm 	http_build_query để chuyển mảng $params thành Query String
	return http_build_query($params);
}
	
	