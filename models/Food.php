<?php 
require_once __DIR__.'/Products.php';
class Food extends Products {
    $weight;
    $kindoffood;
    $state;
     public function __construct($name,$categories,$ean,$internal_code)
    {
        parent:: __construct($name,$categories,$ean,$internal_code);
        $this->weight = $weight;
        $this->kindoffood = $kindoffood;
        $this->state =  $state;
    }
}