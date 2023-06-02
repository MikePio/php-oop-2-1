<?php

require_once __DIR__ . '/PetProduct.php';

class Toy extends PetProduct{

  public $features;
  public $size;

  public function __construct(
    String $_title, 
    Float $_price, 
    String $_image,
    Category $_category,
    String $_features,
    String $_size
  ){
    parent::__construct($_title, $_price , $_image , $_category);

    $this->features = $_features;
    $this->size = $_size;

  }


}









?>