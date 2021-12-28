<?php 

use Application\Services\Debug;

if (!function_exists('dd')) {
    function dd($data)
    {
        Debug::var_dump($data);
    }
}
