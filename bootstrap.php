<?php 

class bootstrap {
	function __construct() {
		$querystring = $_SERVER['REDIRECT_QUERY_STRING'];
		parse_str($querystring, $output);
		if($output) {
			$controller = ($output['controller'])?$output['controller']:'home';
			$method = ($output['method'])?$output['method']:'index';
			$control = $controller."Controller";
			if(file_exists('./controller/'.$control.".php")){
				require_once('./controller/'.$control.".php");
				$controllerObj = new $control();
					$controllerObj->$method();
			}
			else die('controller not found');	
		}	
	}
}
?>