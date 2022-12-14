<?php
include_once __DIR__ . '/Products.php';
include_once __DIR__ . './Traits/Forma.php';
class Cucce
{
    public $taglia;
    public $marca;
    public $materiale;
    use Forma;
    function __construct($_taglia, $_marca, $_materiale)
    {
        $this->taglia = $_taglia;
        $this->marca = $_marca;
        $this->materiale = $_materiale;
    }


}


?>