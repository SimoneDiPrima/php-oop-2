<?php 
require_once __DIR__.'/Products.php';
class Cages extends Products {
    $weight;
    $weight_range;
    $height;

    public function __construct($name,$categories,$ean,$internal_code)
    {
        parent:: __construct($name,$categories,$ean,$internal_code);
        $this->weight = $weight;
        $this->weight_range = $weight_range;
        $this->height =  $height;
    }
}