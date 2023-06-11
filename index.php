<?php

    class prodotto {

        public $immaginePath;
        public $nome;
        public $prezzo;


        function __construct( $_immagine, $_nome, $_prezzo ){
            $this->immaginePath = $_immagine;
            $this->nome = $_nome;
            $this->prezzo = $_prezzo;

        }
    }

    class categoriaProdotto extends prodotto{
        
        public $animale;
        public $tipologia;

        public function getInfo(){
            return $this-> animale . "<br />" . $this->nome;
            
        }
    
    }    
        $prodotto1 = new categoriaProdotto('https://c-eq.niceshops.com/upload/image/product/large/default/dogs-love-cibo-per-cani-barf-tacchino-400-g-555314-it.png', 'dogs love', '4.25$');
        $prodotto1->animale = 'Cani';
        $prodotto1->tipologia = 'cibo';
        //var_dump($prodotto1);
        // echo $prodotto1->getInfo();

        $prodotto2 = new categoriaProdotto('https://www.sleepypets.it/944-medium_default/gioco-per-cani-personalizzato.jpg', 'Sleepypets', '8.49$');
        $prodotto2->animale = 'Cani';
        $prodotto2->tipologia = 'gioco';
        // var_dump($prodotto2);
        // echo $prodotto2->getInfo();

        $prodotto3 = new categoriaProdotto('https://cdn.shop-apotheke.com/images/IT1/003/150/11/IT100315011-p1.jpg', 'Drontal 20mg', '24.49$');
        $prodotto3->animale = 'Gatti';
        $prodotto3->tipologia = 'medicinale';
        // var_dump($prodotto3);
        // echo $prodotto3->getInfo();

        $prodotto4 = new categoriaProdotto('https://www.moda-cani.it/prodotti/big/21429.jpg', 'Short Coat', '13.50$');
        $prodotto4->animale = 'Cani';
        $prodotto4->tipologia = 'shampoo';
        // var_dump($prodotto4);
        // echo $prodotto4->getInfo();

        $arrayProdotti = [ $prodotto1, $prodotto2, $prodotto3, $prodotto4 ];
        //var_dump($arrayProdotti);
        
?>
<?php echo $elem->nome ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .container{
        justify-content: space-between;
    }
    img{
        height:400px;
        width: 300px !important;
    }
</style>
<body>
    
    <h1 class="text-center my-4">Prodotti per animali</h1>
    <div class="container d-flex">

        <?php foreach($arrayProdotti as $elem){ ?>
            <div class="card text-start">
              <img class="card-img-top" src="<?php echo $elem->immaginePath ?>" alt="<?php echo $elem->nome ?>">
              <div class="card-body">
                <h4 class="card-title"><?php echo $elem->nome ?></h4>
                <p class="card-text"><?php echo $elem->prezzo ?></p>
                <p class="card-text">Prodotto per <?php echo $elem->animale ?></p>
              </div>
            </div>
        <?php  }?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>