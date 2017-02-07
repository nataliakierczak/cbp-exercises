<?php 
define ('CURRENCY', 'CZK');

$price=11;
function print_price($price) {
return $price. " " .$CURRENCY;
}
echo print_price($price);

switch (CURRENCY) {
    case "CZK":
        echo 'Kč';
break;
    case "USD":
        echo '$';
break;
    default:
        echo '€';
break;
}
