<?php


header('Content-Type: text/html');

$json = json_encode(array(
	'time'=>time()
));


echo foo({$json});