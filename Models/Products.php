<?php
class Products
{
    public $img;
    public $titolo;
    public $prezzo;
    public $iconaCategoria;

    function __construct($_img, $_titolo, $_prezzo, $_iconaCategoria)
    {
        $this->img = $_img;
        $this->titolo = $_titolo;
        $this->prezzo = $_prezzo;
        $this->iconaCategoria = $_iconaCategoria;
    }
}

?>