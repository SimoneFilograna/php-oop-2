<?php
    require_once __DIR__ . "/models/Prodotti.php";
    require_once __DIR__ . "/models/Categoria.php";
    require_once __DIR__ . "/models/Cibo.php";
    require_once __DIR__ . "/models/Giochi.php";
    require_once __DIR__ . "/models/Cucce.php";
    require_once __DIR__ . "/models/Cane.php";
    require_once __DIR__ . "/models/Gatto.php";
    require_once __DIR__ . "/db/list.php";

    // $cane23 = new Cane();
    // $cane5 = new Giochi("23", $cane->getImg(), "immagine figa", 23);

    // var_dump($cane5)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals Products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <div class="container text-center">
            <h1 class="display-1 mt-5 fw-semibold"> Animals Products</h1>
        </div>
    </header>
    <main>
        <div class="container mt-5 pb-5">
            <div class="row row-cols-3 g-5">
                <?php foreach ($productList as $product) { ?>
                    <div class="col text-center">
                        <div class="card h-100 rounded-4">
                            <img src="<?php echo $product->getImg() ?>" class="card-img-top rounded-4" alt="...">
                            <div class="card-body d-flex flex-column">
                                <small> <strong>Specie:</strong> <?php echo $product->getCategoria() ?></small>
                                <h5 class="card-title mt-3"><?php echo $product->getNome() ?></h5>
                                <p class="card-text mt-auto"> <strong>Prezzo: </strong> <?php echo $product->getPrezzo() ?> €</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </main>
</body>

</html>