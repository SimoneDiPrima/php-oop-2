<?php 
require_once __DIR__.'/Products.php';
class Games extends Products {
    $weight;
    $kindofgames;
    $sound;
    public function __construct($name,$categories,$ean,$internal_code,$weight,$kindofgames,$sound)
    {
        parent:: __construct($name,$categories,$ean,$internal_code);
        $this->setWeight($weight);
        $this->setKindofGames($kindofgames);
        $this->setSound($sound);
    }
    public function setWeight($weight){
        if(isnumeric($weight)){
            return $this->weight = $weight;
        }

    }
    public function getWeight($weight){
        return $this->weight;
    }
    public function setKindofGames($kindofgames){
        if(isnumeric($kindofgames)){
            return $this->kindofgames = $kindofgames;
        }

    }
    public function getKindofGames($kindofgames){
        return $this->kindofgames;
    }
    public function setSound($sound){
        if(isnumeric($sound)){
            return $this->sound = $sound;
        }

    }
    public function getSound($sound){
        return $this->sound;
    }
}
