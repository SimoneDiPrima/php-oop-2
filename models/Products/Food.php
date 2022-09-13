<?php 
require_once __DIR__.'/Products.php';
class Food extends Products
 {
   protected $kindoffood;
   protected $expiration;
   protected $ingredients;
     public function __construct($name,$categories,$ean,$price,$internal_code,$kindoffood,$expiration,$ingredients)
    {
        parent:: __construct($name,$categories,$price,$ean,$internal_code);
      
        $this->setkindOfFood($kindoffood);
        $this->setExpiration($expiration);
        $this->setIngredients($ingredients);
    }

    public function setkindOfFood($kindoffood){
            return $this->kindoffood = $kindoffood;
    }
    public function getkindOfFood($kindoffood){
        return $this->kindoffood;
    }
    public function setExpiration($expiration){
      
            return $this->expiration = $expiration;

    }
    public function getExpiration($expiration){
        return $this->expiration;
    }
    public function setIngredients($ingredients){
       
            return $this->ingredients = $ingredients;
    
    }
    public function getIngredients($ingredients){
        return $this->ingredients;
    }
   

}