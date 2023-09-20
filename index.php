<?php
    require_once __DIR__."/models/Cibo.php";
    require_once __DIR__."/models/Giochi.php";
    require_once __DIR__."/models/Cucce.php";
    require_once __DIR__."/models/Cane.php";

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
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    
</body>
</html>