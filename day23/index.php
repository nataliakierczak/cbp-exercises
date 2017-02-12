<?php
///get all the files within classes as an array
$files = scandir('classes');

//go through all the files
foreach($files as $file)
{
    //if the file is a reference to this folder or the one above, continue
    if($file == '.'|| $file == '..') continue;
    //if the file is a php file (has .php extension)
    if(pathinfo($file, PATHINFO_EXTENSION)=='php')
    {
        //require the file
        require_once('classes/' . $file);
    }
}
//creating new giraffe
//born in a default location - forest
$rupert = new giraffe('Rupert');
//specified born place - pond
$berta = new giraffe('Berta', 'pond');
$matt = new giraffe ('Matthew', 'zoo');
$matt->go_to_pond();
$berta->go_to_pond();
$rupert->go_to_pond();
$berta->go_to_forest();
$todd = new giraffe('Todd');
$todd->goToLocation('zoo');
$berta->goToLocation('zoo');
$bobby = new giraffe('Bobby');
$bobby->goToLocation('zoo');
$rupe = new giraffe('Rupe');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NAture report</title>
</head>
<body>
    


<h1>NAture report</h1>

                                <!--//name of the class //accessing property with :: the property is static-->
<p>Currently there are <?php echo giraffe::getNumberOfGiraffes();?> giraffes in the world.</p>

<p><?php echo giraffe::getNumberOfGiraffesAtLocation('forest');?> of them are in the forest, <?php echo giraffe::getNumberOfGiraffesAtLocation('pond');?> by the pond, <?php echo giraffe::getNumberOfGiraffesAtLocation('zoo');?>in the zoo.</p>

<p>There is a giraffe called <?php echo $rupert->name ;?>.</p>
</p>It <?php echo $rupert->is_hungry ? 'is' : 'is not' ;?> hungry and it <?php echo $rupert->is_thirsty ? 'is' : 'is not' ;?> thirsty.</p>
<p>It is <!--<?php echo $rupert->location ;?>--> <?php echo $rupert->getLocationName() ;?>.</p>

<h2>The giraffes are:</h2>

<ul>
<?php foreach (giraffe::$list_of_giraffes as $giraffe) : ?>
<!--below line possible only because of converting the object into string (toString magical function); without the magical function: echo $giraffe->name)-->
<li><?php echo $giraffe. ' is '  . $giraffe->getLocationName(); ?></li>
<?php endforeach; ?>
</ul>



</body>
</html>