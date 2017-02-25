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

    public function __construct()
    {

    }
}

$address_1 = new address();
$address_2 = new address();
$address_3 = new address();
$address_4 = new address();?>

<?php 

$db = new PDO('mysql:host=localhost;dbname=eshop;charset=utf8', 'Edward', 'gP59FcV');

 function getproduct($id)
    {
        $stmt = $this->db->prepare('SELECT `delivery`.* FROM `delivery` WHERE `delivery`.`id` = 81');
        $stmt-> execute([$id]);
        return $stmt->fetch();
    }



    class delivery {
        public $address=null;
        public $is_sent=false;
        public $sent_at=null;
        public $is_delivered=false;
        public $delivered_at=null;

       
        public function getPrice()
        {
            if (isLocal()=true){
                return 0;
            }
            else {
                return 8.99;
            }
        }
    }

//'INSERT INTO complaint 
//(customer_name, text, filed_at)
//VALUES 
//("Maud Williams", "I was nearly not perfectly satisfied!", 2017-02-17 14:55:12)'
//'INSERT INTO complaint 
//(customer_name, text, filed_at)
//VALUES 
//("Roger Bernard", "The kid size does not fit my kid!", 22017-02-01 19:13:48)'
//'INSERT INTO complaint 
//(customer_name, text, filed_at)
//VALUES 
//("Adria Russell", '"You could be even cheaper.", 2017-02-19 08:46:34)'



class address {
    public function isLocal(){
        if ($this->country=static::$local_country)
        {echo true;} 
        else 
        {echo false;}
    }
}

class delivery {
    public function send(){
        $this->is_sent=true;
        $this->sent_at=date("Y-m-d h:i:sa");
    }
    public function delivered($datetime){
        $this->is_delivered=true;
        $this->delivered_at=$datetime;
    }
}

class us_address extends address {
    protected $state=null;
      $this->local_country="us";
}