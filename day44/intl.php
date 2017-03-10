<?php
echo strtotime('tomorrow');

echo '<br>';
$formatter = new IntlDateFormatter(
	'pl_PL',
	IntlDateFormatter::FULL,
	IntlDateFormatter::MEDIUM
);
echo 'The time is now ' . $formatter->format(time());

echo '<br>';

$collator = new Collator('pl_PL');
$arr = array('bąk', 'żurek', 'bak', 'męcić', 'mącić', 'źrebię' );
$collator->sort($arr);
var_dump($arr);