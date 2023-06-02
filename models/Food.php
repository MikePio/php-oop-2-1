<?php

require_once __DIR__ . '/PetProduct.php';

class Food extends PetProduct{

  public $weight;
  public $ingredients;

  public function __construct(
    String $_title, 
    Float $_price, 
    String $_image,
    Category $_category,
    String $_weight,
    array $_ingredients
  ){
    parent::__construct($_title, $_price , $_image , $_category);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;

  }


}









?>