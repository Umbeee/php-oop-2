<?php

class prodotto {

    public $immagine;
    public $titolo;
    public $prezzo;
    public $iconaCategoria;
    public $tipologiaProdotto;

    function __construct( $_immagine ){
        $this->immagine = $_immagine;
        $this->immagine = $_immagine;
        $this->immagine = $_immagine;
        $this->immagine = $_immagine;
        $this->immagine = $_immagine;
    }

}

    $arrayProdotti = [
        new prodotto('https://www.google.com/search?q=cibo+per+animali&tbm=isch&ved=2ahUKEwiZ1cCIgqr_AhWaHuwKHQoGCGoQ2-cCegQIABAA&oq=cibo+per+animali&gs_lcp=CgNpbWcQA1AAWABgAGgAcAB4AIABAIgBAJIBAJgBAKoBC2d3cy13aXotaW1n&sclient=img&ei=Nbl8ZNnmHJq9sAeKjKDQBg&bih=919&biw=958#imgrc=2ix_Jw7hR2XtjM', "dog's love", '4.25$', 'cibo', 'cibo'),
        new prodotto(),
        new prodotto(),
        new prodotto(),
        new prodotto(),
        new prodotto()
    ];


    var_dump($arrayProdotti);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


</body>
</html>