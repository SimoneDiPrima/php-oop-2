<?php 
class Address{
    protected $firstName;
    protected $lastName;
    protected $street;
    protected $zipcode;
    protected $city;
    protected $country;

    public function __construct($firstName,$lastName,$street,$zipcode,$city,$country)
    {
        $this->setFirstName($firstName);
        $this->setlastName($lastName);
        $this->setStreet($street);
        $this->setZipcode($zipcode);
        $this->setCity($city);
        $this->setCountry($country);
    }
    public function setFirstName($firstName){
       return $this->firstName = $firstName;
    }
    public function getFirstName($firstName){
        return $this->firstName;
    }
    public function setlastName($lastName){
        return $this->lastName = $lastName;
    }
    public function getlastName($lastName){
        return $this->lastName;
    }
    public function setStreet($street){
        return $this->street = $street;
    }
    public function getStreet($street){
        return $this->street;
    }
    public function setZipcode($zipcode){
        return $this->zipcode = $zipcode;
    }
    public function getZipcode($zipcode){
        return $this->zipcode;
    }
    public function setCity($city){
      return  $this->city= $city;
    }
    public function getCity($city){
        return $this->city;
    }
    public function setCountry($country){
      return  $this->country = $country;
    }
    public function getCountry($country){
        return $this->country;
    }

}