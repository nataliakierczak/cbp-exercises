<?php
if(!empty($_POST))
{
    var_dump($_POST);
}

//displays radiobuttons for the supplies values

//the radiobuttons with the value equal to $selected_value will be checked
//@param string $input_name - name of all radiobuttons
//@param arrray $values = array of values
// @param integer|string $selected_value - the value of the checked radiobuttons
// @return void
function print_radio($input_name, $values, $selected_value)
{
    //for each $values
    foreach ($values as $value)
    {
        //print a radiobutton input 
        ?> 
        <input type="radiobutton" 
        <?php 
        //give it the name $inpt_name
        ?>
        name="<?php echo $input_name; ?>"
        <?php
        //make ?it checked if its value is $selected_value
        ?>
        <?php if ($value == $selected_value) :?>
        checked
        <?php endif; ?>
        >
        <?php
    }
}


//production version, not for exercise:
function print_radio2($input_name, $values, $selected_value)
{
    $html='';
    foreach($values as $value)
    {
        $one_radio_html .= '<input type="radio" value=" '. htmlspecialchars($value) . ' "name=" ' .$input_name
        . ($value == $selected_value ? ' checked' : ' ' ) . '>';
        $html .= $one_radio_html;
    }
    echo $html;
}

print_radio('radiobutton', array(1, 2), 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php print_radio2 ('radiobutton', array (
    1 =>'Radiobutton #1',
    2 => 'Radiobutton #2'
), 2); 
))>
    <form action="" method="post">

    <input type="text" name="text" value="coding" placeholder="Write"> <!--placeholder- not the value, will be there only; value-prefilled-in the form; written in php would be <?php echo htmlspecialchars('COding') ;?>-->
    <textarea name="textarea"><?php echo htmlspecialchars('COding') ;?></textarea>
    <input type="checkbox" name="checkbox" checked> <!--<?php if(true) echo 'Checked' ;?>-->
    <input type="checkbox" name="checkbox" checked> <!--php instead of html: <?php echo true ? 'checked' : '' ;?>-->
    <input type="radio" name="radiobutton" value="1">
    <input type="radio" name="radiobutton" value="2">

<select name="select">
<option value="1">One</option>
<option value="2">Two</option>

<input type="password">
<input type="hidden">
<input type="file">
<input type="datetime-local">




    </select>
    <input type="submit" value="Submit form">
    
    
     </form>
</body>
</html>