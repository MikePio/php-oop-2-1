<?php

require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Food.php'; 
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Category.php';

require_once __DIR__ . '/Database/db.php' ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous'/>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous'/>
  <title>Pet Shop</title>
  <style>
    body {
      background-color: #303030;
      color: #0282f9;
      font-family: Arial, Helvetica, sans-serif;
    }
  </style>
</head>

<body>

<header class="bg-dark text-white py-5 px-5">
  <h1 class="px-5 ms-5">Pet Shop</h1>
</header>

<main>

  <div class="container d-flex flex-wrap align-items-start my-5">
    
    <!-- //* stampare con un ciclo foreach l'array $products -->
    <?php  foreach ($products as $product) : ?>
      <div class="text-black my-3 ms-4 me-4" style="width: calc(100%/3.38);">
        <div class="card" style="min-height: 575px;">
          <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="<?php echo $product->getTitle() ?>" style="height: 405px;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $product->getTitle() ?></h5>
            <p class="card-text mb-1">Category: <i class="<?php echo $product->getCategory()->icon ?>"></i> <?php echo $product->getCategory()->name ?></p>
            <!-- <p class="card-text mb-1">Price: &euro; <?php // echo $product->getPrice() ?></p> -->
            <!-- //* per ottenere il prezzo con le virgole -->
            <!-- <p class="card-text mb-1">Price: &euro; <?php // echo $product->getFormatPrice() ?></p> -->
            <p class="card-text text-decoration-line-through mb-1">Original price: &euro; <?php echo $product->getFormatPrice() ?></p>
            <!-- //* prezzo scontato                                                              percentuale   ↓           -->
            <p class="card-text mb-1"><strong>Discounted price: &euro; <?php echo $product->getFormatDiscount(20) ?></strong> </p>
            <?php if(get_class($product) == 'Food') : ?>
              <p class="card-text mb-1">Weight: <?php echo $product->weight ?></p>
              <p class="card-text mb-1">Ingredients: <?php echo implode(', ', $product->ingredients) ?></p>
            <?php endif; ?>
            <?php if(get_class($product) == 'Toy') : ?>
              <p class="card-text mb-1">Features: <?php echo $product->features ?></p>
              <p class="card-text mb-1">Size: <?php echo $product->size ?></p>
            <?php endif; ?>
            <?php if(get_class($product) == 'Accessory') : ?>
              <p class="card-text mb-1">Material: <?php echo $product->material ?></p>
              <p class="card-text mb-1">Size: <?php echo $product->size ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php  endforeach; ?>
  </div>
    
</main>

</body>

</html>