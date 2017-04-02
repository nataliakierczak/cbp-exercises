<?php

$prices = array(
1 => 59.4,
2 => 12.6,
3 => 130,
);

asort($prices);
foreach ($prices as $key => $value) {
    echo "$value<br>";
}