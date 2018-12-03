<?php

$dict=array(
	'hello' =>'你好' , 
	'hello1' =>'你好' , 
	'hello2' =>'你好' , 
	'hello3' =>'你好' ,
	'hello4' => NULL
);
var_dump(array_keys($dict));
// ['hello', 'hello1', 'hello2', 'hello3']
var_dump(array_values($dict));
//['你好'，'你好'，'你好'，'你好']
//
//isset 可以判断数组是否有指定的键
// isset会吞掉 undefined index的警告
if (isset($dict['foo'])) {
// 这种方式虽然可以达到效果，但是会有警告
// if ($dict['foo']) {
	echo $dict['foo'];
} else {
	echo '没有';
}

// empty($dict['foo']) === !isset($dict['foo']) || $dict['foo']==false

if (empty($dict['foo'])) {
	echo '没有';
}else{
	echo $dict['foo'];
}

echo '<br>';
var_dump(isset($dict['foo']));
var_dump(isset($dict['hello4']));
var_dump(isset($dict['hello']));

echo '<br>';
var_dump(empty($dict['foo']));
var_dump(empty($dict['hello4']));
var_dump(empty($dict['hello']));

?>