<?php 

use Application\Services\Debug;

if (!function_exists('dd')) {
    function dd($data) {
        Debug::var_dump($data);
    }
}

if (!function_exists('redirect')){
	function redirect(string $path){
		$url = sprintf('%s/%s', BASE_URL, $path);
		header("Location: $url");
	}
}