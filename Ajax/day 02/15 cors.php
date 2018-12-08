<?php


$connection = mysqli_connect('127.0.0.1','root','123456','min');
if (empty($connection)) {
	echo '数据库链接失败';
}

$query=mysqli_query($connection,'select * from student_info');
while ($row = mysqli_fetch_assoc($query)) {
	$data[] = $row;
}

// header('Access-Control-Allow-Origin:*');
// 声明允许跨域
header('Access-Control-Allow-Origin:http://sites3.io');
header('Content-Type: application/javascript');

echo json_encode($data);