<?php 

spl_autoload_register(function ($class_name) {
    if($class_name === "db") 
    	require_once('./db/'.$class_name.".php");
    else
    	require_once('./controller/'.$class_name.".php");
});

function getPostData() {
	 $post = $_POST;
	 $post  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING,FILTER_FLAG_ENCODE_LOW);
	 return $post;
	//print_r($post);
}

function getGetData() {
		$get = $_GET;
		$get  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING,FILTER_FLAG_ENCODE_LOW);
		return $get;
}

class bootstrap {
	function __construct() {
		$querystring = $_SERVER['REDIRECT_QUERY_STRING'];
		parse_str($querystring, $output);
		if($output) {
			$controller = ($output['controller'])?$output['controller']:'home';
			$method = ($output['method'])?$output['method']:'index';
			$control = $controller."Controller";
			if(file_exists('./controller/'.$control.".php")){
				$controllerObj = new $control();
				$controllerObj->$method();
			}
			else die('controller not found');	
		}	
	}
}
?>