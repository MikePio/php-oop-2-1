<?php

require_once __DIR__ . '/Category.php';

class PetProduct {
  private $title;
  private $price;
  private $image;
  private $category;

  public function __construct(
    String $_title, 
    Float $_price, 
    String $_image,
    Category $_category  
  ){
    $this->setTitle   ($_title);
    $this->setPrice   ($_price);
    $this->setImage   ($_image);
    $this->setCategory($_category);
  }

  //SET
  public function setTitle($_title){
    $this->title = $_title;
  }
  public function setPrice($_price){
    $this->price = $_price;
  }
  public function setImage($_image){
    $this->image = $_image;
  }
  public function setCategory($_category){
    $this->category = $_category;
  }
  
  //GET
  public function getTitle(){
    return $this->title;
  }
  public function getPrice(){
    return $this->price;
  }
  public function getImage(){
    return $this->image;
  }
  public function getCategory(){
    return $this->category;
  }


}


?>