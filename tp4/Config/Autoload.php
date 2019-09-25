<?php
    spl_autoload_register(function ($className)
    {
        $fileName = __DIR__."\..\\". $className.".php";

        require_once($fileName);       
    });
?>