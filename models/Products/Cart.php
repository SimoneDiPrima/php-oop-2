<?php 
class Cart{
    protected $products = [];

    public function getProductOrder(){
        return $this->products;
    }
    public function getTotalProducts(){
        $total = 0;
        foreach($this->products as $product){
            $total += $this->getPrice();
        }
        return $total;
    }
    public function addProduct($product){
       
        $this->products[] = $product;
    }
}
