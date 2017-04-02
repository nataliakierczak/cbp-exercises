<?php

	$timezone = 'America/Caracas';

	echo '<p>'."Current timezone: ".exec('tzutil /g').' @ '.$timezone.'</p>';
	
	$data = array();
	$data[] = array('place' => 'Caracas', 'timezone' => "America/Caracas", 'from' => '9:30', 'to' => '17:00', 'lunch' => '13:00');
	$data[] = array('place' => 'Prague', 'timezone' => "Europe/Prague", 'from' => '9:00', 'to' => '19:30', 'lunch' => '13:00');
	$data[] = array('place' => 'Brno', 'timezone' => "Europe/Prague", 'from' => '9:30', 'to' => '18:30', 'lunch' => '14:00');
	$data[] = array('place' => 'Ostrava', 'timezone' => "Europe/Prague", 'from' => '8:00', 'to' => '17:30', 'lunch' => '12:30');
	$data[] = array('place' => 'Sao Paulo', 'timezone' => "America/Sao_Paulo", 'from' => '9:20', 'to' => '20:30', 'lunch' => '12:40');
	$data[] = array('place' => 'Vienna', 'timezone' => "Europe/Vienna", 'from' => '8:00', 'to' => '18:30', 'lunch' => '13:30');
	$data[] = array('place' => 'Dresden', 'timezone' => "Europe/Berlin", 'from' => '8:00', 'to' => '17:45', 'lunch' => '13:00');
	$data[] = array('place' => 'Berlin', 'timezone' => "Europe/Berlin", 'from' => '8:30', 'to' => '17:30', 'lunch' => '13:30');
	$data[] = array('place' => 'Bogota', 'timezone' => "America/Bogota", 'from' => '8:30', 'to' => '17:30', 'lunch' => '13:10');
	$data[] = array('place' => 'Manaus', 'timezone' => "America/Manaus", 'from' => '9:00', 'to' => '18:00', 'lunch' => '13:00');
	$data[] = array('place' => 'Mexico City', 'timezone' => "America/Mexico_City", 'from' => '9:20', 'to' => '17:45', 'lunch' => '13:00');
	$data[] = array('place' => 'London', 'timezone' => "Europe/London", 'from' => '8:00', 'to' => '17:30', 'lunch' => '13:30');
	$data[] = array('place' => 'Accra', 'timezone' => "Africa/Accra", 'from' => '8:30', 'to' => '18:00', 'lunch' => '13:00');
	$data[] = array('place' => 'Bamako', 'timezone' => "Africa/Bamako", 'from' => '8:30', 'to' => '18:00', 'lunch' => '13:00');
	$data[] = array('place' => 'Brusel', 'timezone' => "Europe/Brussels", 'from' => '8:00', 'to' => '18:00', 'lunch' => '13:00');
	$data[] = array('place' => 'Luxembourgh', 'timezone' => "Europe/Luxembourg", 'from' => '8:00', 'to' => '18:00', 'lunch' => '13:00');
	$data[] = array('place' => 'Kiev', 'timezone' => "Europe/Kiev", 'from' => '8:00', 'to' => '17:45', 'lunch' => '13:00');
	$data[] = array('place' => 'Guatemala', 'timezone' => "America/Guatemala", 'from' => '9:30', 'to' => '18:00', 'lunch' => '13:00');
    $data[] = array('place' => 'Cracow', 'timezone' => "Europe/Warsaw", 'from' => '9:00', 'to' => '19:30', 'lunch' => '13:00');

	$format = "Y-m-d H:i";
	
	function formatMinutes($seconds) {
		$negative = false;
		if ($seconds < 0) {
			$negative = true;
			$seconds = abs($seconds);
		}
		$mins = floor($seconds / 60);
		$hours = floor($mins / 60);
		$mins = $mins - $hours*60;
		//if (strlen($hours) < 2) $hours = '0'.$hours;
		if (strlen($mins) < 2) $mins = '0'.$mins;
		if (!$negative) echo 'in ';
		echo $hours.':'.$mins;
		if ($negative) echo ' ago';
		
	}
	
	foreach ($data as &$d) {
		
		$timeNow = strtotime((new DateTime(null, new DateTimeZone($d['timezone'])))->format('Y-m-d H:i').':00');
		$d['difference'] = ($timeNow - strtotime((new DateTime("now", new DateTimeZone('America/Caracas')))->format('Y-m-d H:i').':00')) / 60 / 60;
		$timeStarts = strtotime((new DateTime("now", new DateTimeZone($d['timezone'])))->format('Y-m-d').' '.$d['from'].':00');
		$d['timeStartsReal'] = $timeStarts - $d['difference'] * 60 * 60;
		if ($timeStarts < $timeNow) $timeStarts += 24*60*60;
		$d['timeLunch'] = strtotime((new DateTime("now", new DateTimeZone($d['timezone'])))->format('Y-m-d').' '.$d['lunch'].':00');
		$d['timeNow'] = $timeNow;
		$d['timeStarts'] = $timeStarts;
		$d['timeEnds'] = strtotime((new DateTime("now", new DateTimeZone($d['timezone'])))->format('Y-m-d').' '.$d['to'].':00');
		$d['timeEndsReal'] = $d['timeEnds'] - $d['difference'] * 60 * 60;
		if ($d['timezone'] == $timezone) {
			$d['current'] = true;
		} else $d['current'] = false;
	}

	function cmp($a, $b) {
		if ($a['timeStartsReal'] == $b['timeStartsReal']) {
			return ($a['timeNow'] < $b['timeNow']) ? -1 : 1;
		}
		return ($a['timeStartsReal'] < $b['timeStartsReal']) ? -1 : 1;
	}
	usort($data, 'cmp');

?>
<html>
<head>
<link rel="stylesheet" media="all" href="//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=3.8.3" />
<link rel="shortcut icon" type="image/png" href="time.png" />
<title>Time</title>
<style type='text/css'>
	body {
		background: gray;
		background: -webkit-gradient(linear, 0 0, 0 bottom, from(#DFE2F4), to(#999BA7))
	}
	body, table td, table th {
		font-family: 'Open sans', Arial, sans-serif;
		font-size: 0.9em;
		margin-top: 3em;
	}
	tr.current td {
		background: #ffe698 !important;
	}
	tr.even td {
		background: rgb(240, 240, 240);
	}
	p {
		text-align: center;
		color: rgba(255, 255, 255, 0.7);
	}
	table, p {
		margin: 0 auto 1em;
	}
	table {
		background: white;
		border-collapse: collapse;
	}
	table td, table th {
		padding: 0.3em 0.5em;
	}
	table td, table th, table {
		border: 1px solid rgb(60, 60, 60);
	}
</style>
</head>
<body>

<table border=1 class='list'>
	<tr>
		<th>Place</th>
		<th>Their time</th>
		<th>Diff.</th>
		<th colspan='2'>Workhours start</th>
		<th colspan='2'>Workhours end</th>
		<th colspan='2'>Lunch time</th>
	</tr>
	
<? foreach ($data as $i => $row) { ?>
	<tr class="<?=$row['current']?'current':''?> <?=$i%2?'even':''?>">
		<td><?=$row['place']?></td>
		<td><?=date($format, $row['timeNow'])?></td>
		<td style='text-align: center;'><?=($row['difference']>0?'+':'').$row['difference']?>h</td>
		<td><?=date($format, $row['timeStartsReal'])?></td>
		<td><?=formatMinutes($row['timeStarts'] - $row['timeNow'])?></td>
		<td><?=date($format, $row['timeEndsReal'])?></td>
		<td><?=formatMinutes($row['timeEnds'] - $row['timeNow'])?></td>
		<td><?=$row['lunch']?></td>
		<td><?=formatMinutes($row['timeLunch'] - $row['timeNow'])?></td>
		
	</tr>
<? } ?>

</table>

</body>
</html>