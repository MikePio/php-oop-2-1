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
  //* per ottenere il prezzo con le virgole
  public function getFormatPrice(){
    return number_format($this->price, 2, ',', '.');
  }
  public function getDiscount($_discount){
    return $this->price *= (1 - $_discount/100);
  }
  public function getFormatDiscount($_discount){
    return number_format($this->getDiscount($_discount), 2, ',', '.');
  }
  public function getImage(){
    return $this->image;
  }
  public function getCategory(){
    return $this->category;
  }


}


?>