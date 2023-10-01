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
      /* background-color: #303030; */
      background-color: #212529;
      color: #0282f9;
      /* font-family: Arial, Helvetica, sans-serif; */
    }
  </style>
</head>

<body>

<!-- <header class="bg-dark text-white py-5 px-5"> -->
<header class="bg-dark text-white text-start p-5"  style="background-color: rgba(0, 0, 0, 0.2) !important;">
  <h1>Pet Shop</h1>
</header>

<main>

  <div class="text-white py-0 px-5">
  <h2 class="ms-4 pt-5 ps-5">Our products</h2>
  </div>

  <div class="container d-flex flex-wrap align-items-start my-5">
    
    <!-- //* stampare con un ciclo foreach l'array $products -->
    <?php  foreach ($products as $product) : ?>
      <div class="text-black my-3 ms-4 me-4" style="width: calc(100%/3.38);">
        <div class="card" style="min-height: 575px;">
          <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="<?php echo $product->getTitle() ?>" style="height: 405px;">
          <div class="card-body">
            <h5 class="card-title"><strong><?php echo $product->getTitle() ?></strong></h5>
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

<footer class="bg-dark text-center text-white">

  <!-- Grid container -->
  <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">

  <!-- 
    <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

    <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="#!" role="button"><i class="fab fa-twitter"></i></a>

    <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="#!" role="button"><i class="fab fa-google"></i></a> 
  -->
    
          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1 rounded-circle"
              href="https://www.instagram.com/michelepiopilla/" role="button"><i class="fab fa-instagram"></i></a>

          <!-- Linkedin -->
          <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="https://www.linkedin.com/in/michele-pilla/" role="button"><i
                  class="fab fa-linkedin-in"></i></a>

          <!-- Github -->
          <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="https://github.com/MikePio"
              role="button"><i class="fab fa-github"></i></a>

      </section>
      <!-- Section: Social media -->
  </div>

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 By
      <a class="text-white" href="https://github.com/MikePio">@MikePio</a>
  </div>

</footer>

</body>

</html>