<?php
require_once __DIR__ . '/Products.php';
class Giochi extends Products
{
    public $forma;
    public $materiale;
    public $marca;

    function __construct($_forma, $_materiale, $_marca, $_img, $_titolo, $_prezzo, $_iconaCategoria) //7

    {
        parent::__construct($_img, $_titolo, $_prezzo, $_iconaCategoria); //4 genitore
        $this->forma = $_forma;
        $this->materiale = $_materiale;
        $this->marca = $_marca;
    }


}


?>