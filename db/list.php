<?php
    
    
    $cane = new Cane();
    $gatto = new Gatto();

    $productList = [

    new Giochi(
        _nome: "Dog Activity Chess", 
        _categoria: $cane->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/265064/gioco-cane-interattivo.jpg?v=1780618370",
        _prezzo: 32),

    new Giochi(
        _nome: "Dog Activity Mini Solitaire", 
        _categoria: $cane->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/265073/giochi-per-cani-intelligenza.jpg?v=1779668288",
        _prezzo: 25),

    new Giochi(
        _nome: "Yes! Gatto Pallina Peluche Rosa", 
        _categoria: $gatto->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/227172/yes-pallina-peluche-rosa-con-coda-cm-4-5x12.jpg?v=1781482722",
        _prezzo: 10),

    new Cucce(
        _nome: "Cuccia Rettangolare Zig Zag", 
        _categoria: $cane->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/273257/LUNA-TEO-CUCCIA-RETT.-CM.-60-ZIG-ZAG.jpg?v=1781603512",
        _prezzo: 40),

    new Cucce(
        _nome: "Cuccetta di Natale Elf Hat", 
        _categoria: $gatto->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/276486/croci-cuccetta-di-natale-per-cane-elf-hat.jpg?v=1779546400",
        _prezzo: 50),

    new Cucce(
        _nome: "Cuccia Igloo Rosa", 
        _categoria: $gatto->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/268671/zolux-cuccia-igloo-rosa.jpg?v=1779754884",
        _prezzo: 20),

    new Cibo(
        _nome: "Natural Trainer Gatto Adult Tonno", 
        _categoria: $gatto->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/263992/8059149247625_124028_AFF_TRA33_21_Mainstream_Adult_Tuna_300g_AAFF_3D.jpg?v=1781710238",
        _prezzo: 10),
    
    new Cibo(
        _nome: "Monge Sterilised ricco di Pollo", 
        _categoria: $gatto->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/271838/400.jpg?v=1781620854",
        _prezzo: 10),
    
    new Cibo(
        _nome: "Purina Pro Plan Veterinary Diets Hypoallergenic HA Cane", 
        _categoria: $cane->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/276167/MAIN.jpg?v=1781630151",
        _prezzo: 10),
    
    ]    

    
                
?>