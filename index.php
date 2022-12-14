<?php
require_once __DIR__ . '/Models/Categorie.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Cucce.php';

$pallina = new Giochi("rotonda", "gomma", "Belcane", "url", "palla", "7.30", "cane");
var_dump($pallina);
$cuccia = new Cucce("piccolo", "monge", "cotone");
var_dump($cuccia);

function lavabile($string)
{
    if (!is_string($string)) {
        throw new Exception('Is not a text');
    }
    return $string;
}


try {
    echo lavabile('si');
} catch (Exception $e) {
    echo 'Eccezione:' . $e->getMessage();
}


?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">E-commerce</a>
        </div>
    </nav>
    <main>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                
            </div>
        </div>

    </main>
    <footer>

    </footer>
</body>

</html> -->