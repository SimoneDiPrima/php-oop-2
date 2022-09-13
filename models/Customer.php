<?php 

include_once __DIR__.'\Products\Cart.php';


class Customer{
    protected $cart;

    public function __construct(){
        $this->setCart();
    }

    public function getCart(){
        return $this->cart;
    }
    public function setCart(){
        return $this->cart = new Cart();
    }
    public function addtoCart($product){
        $this->cart->addProduct($product);
    }
}