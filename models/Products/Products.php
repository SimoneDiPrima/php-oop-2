<?php 
class Products {
    protected $name;
    protected $categories;
    protected $price;
    protected $ean;
    protected $internal_code;

    public function __construct($name,$categories,$price,$ean,$internal_code,){
       $this->setName($name);
       $this->setCategories($categories);
       $this->setPrice($price);
       $this->setEan($ean);
       $this->setInternalCode($internal_code);
    }

    public function setName($name){
            return $this->name = $name;
    }
    public function getName($name){
        return $this->name;
    }
    public function setCategories($categories){
        
            return $this->categories = $categories;

    }
    public function getCategories($categories){
        return $this->categories;
    }
    public function setPrice($price){
       
            return $this->price = $price;

    }
    public function getPrice($price){
        return $this->price;
    }
    public function setEan($ean){
       
            return $this->ean = $ean;

    }
    public function getEan($ean){
        return $this->ean;
    }
     function setInternalCode($internal_code){
        
            return $this->internal_code = $internal_code;

    }
    public function getInternalCode($internal_code){
        return $this->internal_code;
        
    }
 
}