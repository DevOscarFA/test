<?php

//nueva linea
//linea nueva

	$mystring = 'start_date_from';

	$mystring = 'filter_start_date_from';

	$findme   = '_';
	$posInitial = strpos($mystring, $findme);
	$posFinal = strlen ( $mystring );

	echo substr($mystring,$posInitial+1,$posFinal);

?>
