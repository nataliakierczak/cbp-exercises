<?php
$product_id = 321;
$color = 'blue';
$size = 'xl';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T-shirt</title>
</head>
<body>
    
<form action="cart.php" method="post">

<input type="hidden" name="$product_id" value="$product_id" />

Color:
<br>
<input type="radio" name="color" value="blue" id="color-blue" checked>Blue
<br>
<input type="radio" name="color" value="black" id="color-black" >Black
<br>

<br><hr>

Size:
<select name="size">
<option value="XS">XS</option>
<option value="S">S</option>
<option value="L">L</option>
<option value="XL" selected="selected">XL</option>
<option value="XXL">XXL</option>
</select>

<br><hr>

Amount: 
<input type= "text" name="amount">

<br><hr>

Checkout
<input type="checkbox" name="checkout" value="1">

<br><hr>

<input type="submit" value="Submit the form">

</form>
</body>
</html>