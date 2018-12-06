<?php
header('ContentType:application/json');
/**
 *
 * 返回的响应时一个JSON内容（返回的就是数据）
 * 对于返回数据的地址一般我们称之为API（接口）-形式上是WEB信息，基于WEB的
 * 
 */

// /users.php?id=1 =>id为1的用户信息 
// 
 $data = array(
 	array (
 		'id' => 1, 
 		'name' => '张三', 
 		'age' => 18
 	),
 	array (
 		'id' => 2, 
 		'name' => '李四', 
 		'age' => 18
 	),
 	array (
 		'id' => 3, 
 		'name' => '王五', 
 		'age' => 19
 	),
 	array (
 		'id' => 4, 
 		'name' => '高大', 
 		'age' => 20
 	)
 	
 );

 if (empty($_GET['id'])) {
 	// 没有ID获取全部
 	// 因为Http协议中约定，报文的内容就是字符串，而我们需要传递给客户的的信息是一个有结构的数据
 	// 这种情况我们一般采用 JSON 作为数据格式
 	$json=json_encode($data); // => [{"id":1,"name":"张三"},{...}]
 	echo $json;
 }else {
 	// 传递了ID只获取一条
 	foreach ($data as $item) {
 		if ($item['id']!=$_GET['id']) continue;
 		$json=json_encode($item);
 		echo $json;
 	}

 }
