

<?php include ('class_lib.php'); ?>
<?php
$mruczek=new Cat ();
$kicia = new Cat;
$mruczek->set_name('mruczek');
$kicia->set_name ('kicia');

echo $mruczek->get_name();
echo $kicia->get_name(); 
echo "My cats names are "  .$mruczek->get_name() . " and " .$kicia->get_name();