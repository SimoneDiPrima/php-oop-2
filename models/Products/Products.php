<?php 
class Products {
    protected $name;
    protected $categories;
    protected $price;
    protected $ean;
    protected $internal_code;
    protected $description;

    public function __construct($name,$categories,$ean,$internal_code){
       $this->setName($name);
       $this->setCategories($categories);
       $this->setPrice($price);
       $this->setEan($ean);
       $this->setInternalCode($internal_code);
       $this->setDescription($description);
    }

    public function setName(){
        if(!isnumeric($name)){
            return $this->name = $name;
        }
        else{
            return false;
        }

    }
    public function getName(){
        return $this->name;
    }
    public function setCategories(){
        if(!isnumeric($categories)){
            return $this->categories = $categories;
        }
        else{
            return false;
        }

    }
    public function getCategories(){
        return $this->categories;
    }
    public function setPrice(){
        if(isnumeric($price)){
            return $this->price = $price;
        }
        else{
            return false;
        }

    }
    public function getPrice(){
        return $this->price;
    }
    public function setEan(){
        if(isnumeric($ean)){
            return $this->ean->uniqid();
        }
        else{
            return false;
        }

    }
    public function getEan(){
        return $this->ean;
    }
     function setInternalCode(){
        if(isnumeric($internal_code) && $internal_code >= 0){
            return $this->internal_code = $internal_code;
        }
        else{
            return false;
        }

    }
    public function getInternalCode(){
        return $this->internal_code;
        
    }
    public function setDescription(){
        if(!isnumeric($description) && ($description) > ''){
            return $this->description = $description;
        }
        else{
            return false;
        }
        
    }
    public function getDescription(){
        return $this->description;
    }
 
}