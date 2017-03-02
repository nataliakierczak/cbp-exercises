//exercise 3

<?php
class addres{
public function __construct($address_array){
    if(isset($address_array['name'])) $this->name = $address_array['name'];
    if(isset($address_array['street'])) $this->name = $address_array['street'];
    if(isset($address_array['house_nr'])) $this->name = $address_array['house_nr'];
    if(isset($address_array['city'])) $this->name = $address_array['city'];
    if(isset($address_array['country'])) $this->name = $address_array['country'];
    if(isset($address_array['postal_code'])) $this->name = $address_array['postal_code'];
}
}

$address1 = new address (array(
    //array with address details
));


//exercise 5

class delivery {
    public function __construct($address){
        $this->address = $address;
    }

    public function getPrice()
        {
            if ($this->address->isLocal()){
                return 0;
            } else {
                return 8.99;
            }
        }

}