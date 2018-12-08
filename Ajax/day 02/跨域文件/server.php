<?php


$connection = mysqli_connect('127.0.0.1','root','123456','min');
if (empty($connection)) {
	echo '数据库链接失败';
}

$query=mysqli_query($connection,'select * from student_info');
while ($row = mysqli_fetch_assoc($query)) {
	$data[] = $row;
}



if (empty($_GET['callback'])){
	header('Content-Type: application/json');
	echo json_encode($data);
	exit();
}
// header('Content-Type: application/json');
// echo json_encode($data);
// 
// 如果客户端采用的是 script 标记对我发送的请求
// 一定要返回一段javascript
header('Content-Type: application/javascript');
$result=json_encode($data);

// echo "{$_GET['callback']}({$result})";
$callback_name = $_GET['callback'];
echo "typeof {$callback_name} === 'function' && {$callback_name}({$result})";
