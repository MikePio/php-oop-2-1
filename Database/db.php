<?php

//* da PetProduct.php
// title
// price
// image
// category

//* creo le categorie
$categories = [
  'cat' => new Category('Cats', 'fa-solid fa-cat'),
  'dog' => new Category('Dogs',  'fa-solid fa-dog'),
  'fish' => new Category('Fishes', 'fa-solid fa-cat'),
  'bird' => new Category('Birds', 'fa-solid fa-fish'),
];

var_dump($categories['dog']); 

//* creo un array che contiene tutti i prodotti
$products = [
// Cibo per cani 1
//* creo un nuovo oggetto (prodotto)
                            // title         price      image           category        weight  ingredients
$dogCrunchyBites = new Food('Crunchy Bites', 43.99, 'img/img1.jpg', $categories['dog'], '545g', ['Ham', 'Rice']),

// Cibo per cani 2
$dogSalmonPeas = new Food('Salmon and Peas', 44.99, 'img/img2.jpg', $categories['dog'], '600g', ['Salmon', 'Peas']),

// Cibo per gatti
$catChicken = new Food('Chicken for cats', 44.99, 'img/img3.jpg', $categories['cat'], '400g', ['Chicken']),

// Mangime per pesci
$fishFeed = new Food('Fish feed', 2.95, 'img/img4.jpg', $categories['fish'], '30g', ['Cereals', 'Yeasts', 'Algae']),

// Voliera in legno
$birdAviary = new Accessory('Bird aviary', 184.99, 'img/img5.jpg', $categories['bird'], 'Floats and bounces', '83 x 67x 153'),

// Kong classic
$dogToy = new Toy('Kong classic, Dog toy', 13.49, 'img/img6.jpg', $categories['dog'], 'Soft with rope tail', '8,5 cm x 10 cm'),

// Topo di peluche
$catPlushMouse = new Toy('Plush mouse, Cat toy', 4.99, 'img/img7.jpg', $categories['cat'], '545g', '8,5 cm x 10 cm'),

// Acquario
$fishAquarius = new Accessory('Aquarius', 55.99, 'img/img8.jpg', $categories['fish'], 'Glass, Steel, Plastic', 'L23 cm x W10 cm x H27,5 cm'),

];


//* Stampo l'oggetto (il prodotto)
// // Cibo per cani 1
// var_dump($dogCrunchyBites);
// // Cibo per cani 2
// var_dump($dogSalmonPeas);
// // Cibo per gatti
// var_dump($catChicken);
// // Mangime per pesci
// var_dump($fishFeed);
// // Voliera in legno
// var_dump($birdAviary);
// // Kong classic
// var_dump($dogToy);
// // Topo di peluche
// var_dump($catPlushMouse);
// // Acquario
// var_dump($fishAquarius);

//* Stampo tutti gli oggetti (i prodotti)
var_dump($products);


?>