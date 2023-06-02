<?php

require_once __DIR__ . '/PetProduct.php';

class Toy extends PetProduct{

  public $material;
  public $size;

  public function __construct(
    String $_title, 
    Float $_price, 
    String $_image,
    Category $_category,
    String $_material,
    String $_size
  ){
    parent::__construct($_title, $_price , $_image , $_category);

    $this->material = $_material;
    $this->size = $_size;

  }


}









?>