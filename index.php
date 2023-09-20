<?php
    require_once __DIR__."/models/Cibo.php";
    require_once __DIR__."/models/Giochi.php";
    require_once __DIR__."/models/Cucce.php";
    require_once __DIR__."/models/Cane.php";
    require_once __DIR__."/models/Gatto.php";

    $cane = new Cane();
    $gatto = new Gatto();

    $gioco1 = new Giochi(
        _nome: "Dog Activity Chess", 
        _categoria: $cane->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/265064/gioco-cane-interattivo.jpg?v=1780618370",
        _prezzo: 32);

    $gioco2 = new Giochi(
        _nome: "Dog Activity Mini Solitaire", 
        _categoria: $cane->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/265073/giochi-per-cani-intelligenza.jpg?v=1779668288",
        _prezzo: 25);

    $gioco3 = new Giochi(
        _nome: "Yes! Gatto Pallina Peluche Rosa", 
        _categoria: $gatto->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/227172/yes-pallina-peluche-rosa-con-coda-cm-4-5x12.jpg?v=1781482722",
        _prezzo: 10);

    $cuccia1 = new Cucce(
        _nome: "Cuccia Rettangolare Zig Zag", 
        _categoria: $cane->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/273257/LUNA-TEO-CUCCIA-RETT.-CM.-60-ZIG-ZAG.jpg?v=1781603512",
        _prezzo: 40);

    $cuccia2 = new Cucce(
        _nome: "Cuccetta di Natale Elf Hat", 
        _categoria: $gatto->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/276486/croci-cuccetta-di-natale-per-cane-elf-hat.jpg?v=1779546400",
        _prezzo: 50);

    $cuccia3 = new Cucce(
        _nome: "Cuccia Igloo Rosa", 
        _categoria: $gatto->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/268671/zolux-cuccia-igloo-rosa.jpg?v=1779754884",
        _prezzo: 20);

    $cibo1 = new Cibo(
        _nome: "Natural Trainer Gatto Sterilised Salmone", 
        _categoria: $gatto->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/248329/trainer-natural-gatto-sterilized-salmone.jpg?v=1781629878",
        _prezzo: 10);
    
    $cibo2 = new Cibo(
        _nome: "Monge Sterilised ricco di Pollo", 
        _categoria: $gatto->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/271838/400.jpg?v=1781620854",
        _prezzo: 10);
    
    $cibo3 = new Cibo(
        _nome: "Purina Pro Plan Veterinary Diets Hypoallergenic HA Cane", 
        _categoria: $cane->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/276167/MAIN.jpg?v=1781630151",
        _prezzo: 10);
    

    $productList = [];

    array_push($productList, $gioco1, $gioco2, $gioco3, $cuccia1, $cuccia2, $cuccia3, $cibo1, $cibo2, $cibo3);
                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container text-center">
            <h1 class="display-1 mt-5"> Animals Products</h1>
        </div>
    </header>
    <main>
        <div class="container mt-5 pb-5">
            <div class="row row-cols-3 g-5">
                <?php foreach ($productList as $product) { ?>
                    <div class="col text-center">
                        <div class="card h-100 rounded-4">
                            <img src="<?php echo $product->getImg()?>" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <small> <strong>Specie:</strong>  <?php echo $product->getCategoria() ?></small>
                                <h5 class="card-title mt-3"><?php echo $product->getNome()?></h5>
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