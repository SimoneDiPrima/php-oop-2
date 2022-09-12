<?php 
class LoyalCustomer {

    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $age;
    public $address;
    public $favouriteAnimals;
    protected $averageExpense;
    protected $invoices;
    protected $price;
    protected $discount;


    public function __construct($firstName,$lastName,$phoneNumber,$age,$address,$favouriteAnimals,$averageExpense,$invoices,$discount = '20%'){
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setPhoneNumber($phoneNumber);
        $this->setAge($age);
        $this->setAddress($address);
        $this->setFavouriteAnimals($favouriteAnimals);
        $this->setAverageExpense($averageExpense);
        $this->setInvoices($invoices);
        $this->setDiscount($discount);
    }

    public function setFirstName(){
        if(!isnumeric($firstName)){
            return $this->firstName = $firstName;
        }
        else{
            return false;
        }


    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function setLastName(){
        if(!isnumeric($lastName)){
            return $this->lastName = $lastName;
        }
        else{
            return false;
        }
        
    }
    public function getLastName(){
        return $this->lastName;
    }
    
    public function setPhoneNumber(){
        if(isnumeric($phoneNumber) && $phoneNumber >= 9 ){
            return $this->phoneNumber = $phoneNumber;
        }
        else{
            return false;
        }
        
    }
    public function getPhoneNumber(){
        return $this->phoneNumber;
    }
    public function setAge(){
        if(isnumeric($age) && $age >= 18 ){
            return $this->age = $age;
        }
        else{
            return false;
        }
        
    }
    public function getAge(){
        return $this->age;
    }
    public function setAddress(){
        if(isnumeric($address)){
            return $this->address = $address;
        }
        else{
            return false;
        }
        
        
    }
    public function getAddress(){
        return $this->address;
    }
    public function setFavouriteAnimals(){
        if(isnumeric($favouriteAnimals) && $favouriteAnimals >= 0 ){
            return $this->favouriteAnimals = $favouriteAnimals;
        }
        else{
            return false;
        }
        

    }
    public function getFavouriteAnimals(){
        return $this->favouriteAnimals;
    }
    public function setAverageExpense(){
        if(isnumeric($averageExpense) && $averageExpense >= 0 ){
            return $this->averageExpense = $averageExpense;
        }
        else{
            return false;
        }

        
    }
    public function getAverageExpense(){
        return $this->averageExpense;
    }
    public function setInvoices(){
        if(isnumeric($invoices) && $invoices >= 0 ){
            return $this->invoices = $invoices;
        }
        else{
            return false;
        }
        
    }
    public function getInvoices(){
        return $this->invoices;
    }
    protected function setPrice(){
        if(isnumeric($price)){
            return $this->price = $price;
        }
        else{
            return false;
        }

    }
    protected function getPrice(){
        return $this->price;
    }
    protected function setDiscount(){
        if(isnumeric($price)){
            return $this->price = ($price*100/20);
        }
        else{
            return false;
        }
        
    }
    protected function getDiscount(){
        return $this->discount;
    }

}
