<?php
    //namespace Classes;
    
    function autoload($filePath)
    {
        if (file_exists($filePath)){
            require_once($filePath);
        }
    }
    
    function productsAutoload($className) 
    {
        $filePath='./classes/products/'.$className.'.class.php';
        autoload($filePath);
    }
    
    function toolsAutoload($className) 
    {
        $filePath='./classes/tools/'.$className.'.class.php';
        autoload($filePath);
    }
    
    spl_autoload_register('productsAutoload');
    spl_autoload_register('toolsAutoload');
