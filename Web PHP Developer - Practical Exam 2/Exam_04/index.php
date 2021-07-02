<?php 


echo checkdifferencedate('2019-05-31' ,'2018-04-05');
function checkdifferencedate($date1 , $date2){
	$first_date = new DateTime($date1);
	$second_date = new DateTime($date2);
	$interval = $first_date->diff($second_date);

return $interval->format('%y year , %m month , %d days.');
}


?>