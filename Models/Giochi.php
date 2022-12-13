<?php
require_once __DIR__ . '/Models/Products.php';
class Giochi extends Products
{
    public $forma;
    public $materiale;
    public $marca;

    function __construct($_forma, $_materiale, $_marca)
    {
        parent::__construct($_forma, $_materiale);
        $this->forma = $_forma;
        $this->materiale = $_materiale;
        $this->marca = $_marca;
    }


}


?>