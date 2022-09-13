<?php 
require_once __DIR__.'/Products.php';
class Games extends Products {
    $weight;
    $kindofgames;
    $state;
    $sound;
    public function __construct($name,$categories,$ean,$internal_code)
    {
        parent:: __construct($name,$categories,$ean,$internal_code);
        $this->weight = $weight;
        $this->kindoffood = $kindofgame;
        $this->state =  $state;
        $this->$sound;
    }
}
