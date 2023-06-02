<?php

//* da PetProduct.php
// title
// price
// image
// category

$categories = [
  'cat' => new Category('Cats', 'fa-solid fa-cat'),
  'dog' => new Category('Dogs',  'fa-solid fa-dog'),
  'fish' => new Category('Fishes', 'fa-solid fa-cat'),
  'bird' => new Category('Birds', 'fa-solid fa-fish'),
];

var_dump($categories['dog']); 

//* creo un nuovo oggetto (prodotto)
                            // title         price      image           category        weight  ingredients
$dogCrunchyBites = new Food('Crunchy Bites', 43.99, 'img/img1.jpg', $categories['dog'], '545g', ['Ham', 'Rice']);

//* Stampo l'oggetto (il prodotto)
var_dump($dogCrunchyBites);







?>