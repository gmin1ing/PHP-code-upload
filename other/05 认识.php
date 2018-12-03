<?php

$arr=[1,3,5,8,19];
foreach ($arr as $value) {
	echo $value;
}

$assoc = ['key1'=> 'value1','key2'=> 'value2','key3'=> 'value3'];
foreach ($assoc as $key => $value) {
	echo $key;
	echo $value;
}