<?php
include_once __DIR__ . '/Models/Cibo.php';
include_once __DIR__ . '/Models/Giochi.php';
include_once __DIR__ . '/Models/Cucce.php';
class Products
{
    public $cibo;
    public $giochi;
    public $cucce;

    function __construct($_cibo, $_giochi, $_cucce)
    { 
        $this ->cibo = $_cibo;
        $this ->giochi = $_giochi;
        $this ->cucce; = $_cucce;  

    }


}


?>