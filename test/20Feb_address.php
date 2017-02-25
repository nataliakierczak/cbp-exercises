<?php

class address {
    protected $name=null;
    protected $street=null;
    protected $house_nr=null;
    protected $city=null;
    protected $country=null;
    protected $postal_code=null;

    protected static $local_country=null;

    public static function setLocalCountry($local_country)
    {
        static::$local_country=$local_country;
    }

    public function __construct($name,$street,$house_nr,$city,$country,$postal_code){

        static::$list_of_addresses[] = $this;
            $this->street = $street;
            $this->house_nr = $house_nr;
            $this->city = $city;
            $this->country = $country;
            $this->postal_code = $postal_code;

     }
}

array(
    'street' => 'Schorbachstrasse',
    'city' => 'Butzbach',
    'postal_code' => '35510',
    'country' => 'de'
);

$address_1=new address('name','street','house_nr','city','country','postal_code');
   $address=array();
foreach($addresses as $address)
{
    $addresses[$object->address][]=$object;
}

foreach($objects as $object)
{
    $addresses[$object->address][]=$object;
}


