<?php
$decimal=12.6666;
$country_names=array(
    'cz' => 'Czechia',
    'de' => 'Germany',
    'fr' => 'France'
);

$this_country=$country_names['cz'];

$country_gdp=array(
    'cz' => 189982000000,
    'de' => 3371000000000,
    'fr' => 2422000000000
);
$money=123456789000000;
var_dump ($money); //result 1.23456789E+14 e to power of 14

echo "The amount is" .$money ;
echo 'The amount is '.($money/1000).' USD<br>';
echo 'The amount is '.($money/1000).' thousand USD<br>';
echo 'The amount is '.($money/1000000). ' million USD<br>';
echo 'The amount is '.($money/1000000000). ' billion USD<br>';
echo 'The amount is close to '.round($money/1000000000000). ' trillion USD<br>';
echo 'The amount is close to '.round($money/1000000000). ' billion USD<br>';//rounds like in maths 
echo 'The amount is above '.floor($money/1000000000). ' billion USD<br>'; //floor-rounds down (10.9 rounds to 10)
echo 'The amount is under '.ceil($money/1000000000). ' billion USD<br>'; //ceil (from ceiling)-rounds up

echo '<ul>';
foreach($country_names as $index => $country)
{
   echo '<li>Nominal GDP value of ' .$country. ' is '  .($country_gdp[$index]/1000000000) .'USD</li>';
}
echo '</ul>';


class country 
{
protected $name =null; //initialising with null
protected $gdp = null;
public function __construct($name, $gdp) {
    $this->name = $name;
    $this->gdp = $gdp;
}
public function getName()
{
    return $this->name;
}
public function getGdp()
{
   return round($this->gdp/1000000000);
}
}

$countries = array (); //OR $countries =[];

echo '<ul>';
foreach($country_names as $index => $country_name)
{
$country = new country($country_name, $country_gdp[$index]);
$countries[] = $country;
}
echo '</ul>';
var_dump ($countries);

echo '<ul>';
foreach($countries as $country)
{
 echo '<li>Nominal GDP value of ' .$country->getName(). ' is $ '  .$country->getGdp().'</li>';
}
echo '</ul>';