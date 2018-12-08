<?php

header('Content-Type: application/javascript');

$json = json_encode(array(
	'time' => time()
));

echo "var data = myonload({$json})";

?>