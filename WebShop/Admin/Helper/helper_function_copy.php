<?php 

	function echo_querystring($key, $value)
	{		
	  	$querystring="";	 
		if($_GET) {
			$args = explode("&",$_SERVER["QUERY_STRING"]);
			foreach($args as $arg) {
				$keyval = explode("=",$arg);
				if($keyval[0] != $key) 
					$querystring .= "&" . $arg;
			}
		}
		if($_POST) {
			foreach($_POST as $key=>$val) {
				if($key != $key) 
					$querystring .= "&$key=$val";
			}
		}
		return $key."=".$value.$querystring;
	}
	
	//--------------------------------------------------//
	/**
	 add_var_to_querystring($url, $key, $value): Add Query String Variable
		- Description: Here is a function that will add the specified query-string variable (key and value) 
		  				to the specified URL:
		- Parametter:
			$url – URL to which the query-string variable should be added
			$key – query-string variable key
			$value – query-string variable value
		- Example:
			$url = 'http://example.com/whatever/?hello=world';
			shapeSpace_add_var($url, 'goodbye', 'nightclub');
			
			=> The resulting URL will look like this:
			http://example.com/whatever/?hello=world&goodbye=nightclub
	*/
	function add_var_to_querystring($key, $value, $url="") {
		if($url=="")	
			$url='http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			
		$url = preg_replace('/(.*)(?|&)'. $key .'=[^&]+?(&)(.*)/i', '$1$2$4', $url .'&');
		$url = substr($url, 0, -1);
		
		if (strpos($url, '?') === false) {
			return ($url .'?'. $key .'='. $value);
		} else {
			return ($url .'&'. $key .'='. $value);
		}
	}
	/**
	remove_var_from_querystring($url, $key): Remove Query String Variable
		- Description: Here is a similar function that removes the specified variable from the specified URL:
		- Parametter:
			$url – URL to which the query-string variable should be removed
			$key – query-string variable key			
		- Example:
			$url = 'http://example.com/whatever/?hello=world&goodbye=nightclub';
			shapeSpace_remove_var($url, 'hello');
			
			=> The resulting URL will look like this:
			http://example.com/whatever/?goodbye=nightclub
	*/
	function remove_var_from_querystring($key,$url) {
		if($url=="")	
			$url='http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			
		$url = preg_replace('/(.*)(?|&)'. $key .'=[^&]+?(&)(.*)/i', '$1$2$4', $url .'&');
		$url = substr($url, 0, -1);
		return ($url);
	}
?>