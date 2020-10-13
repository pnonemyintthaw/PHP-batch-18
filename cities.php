<?php
$cities= [
	'New York' => 'NY(8,175,133 people)', 
	'Los Angeles' => 'CA(3,792,621)',
	'Chicago' => 'IL(2,695,598)',
	'Houston' => 'TX(2,100,263)', 
	'Philadelphia' => 'PA(1,526,006)',
	'Phoenix' => 'AZ(1,445,632)',
	'San Antonio' => 'TX(1,327,407)',
	'San Diego' => 'CA(1,307,402)',
	'Dallas' => 'TX(1,197,816)',
	'San Joes' => 'CA(945,942)'];


echo "<table width='500px' border=1>";
echo "<tr><td colspan='2'>Largest cities order by population</td></tr>";

foreach ($cities as $key=>$value) {
	echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "<table><br>";


echo "<table width='500px' border=1>";
echo "<tr><td colspan='2'>Largest cities order by city name</td></tr>";
ksort($cities);
foreach ($cities as $key=>$value) {
	echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "<table>";

	?>