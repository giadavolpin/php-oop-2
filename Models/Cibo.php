<?php
include_once __DIR__ . '/Products.php';
class Cibo extends Products
{

    public $gusto;
    public $marca;
    public $consistenza;


    function __construct()
    {
    }


}
/* 
$Croccantini = new Croccantini(5.49, 'pollo', 'monge', 'dura');
*/
?>