<?php
// 1、建立与数据库服务器之间的链接
 $connection = mysqli_connect('127.0.0.1','root','123456','min');
// $connection失败返回false
if (!$connection) {
	exit('<h1>链接数据库失败</h1>');
}
// 得到的是查询对象，这个查询对象可以用来到数据库中一行一行拿数据
$query =mysqli_query($connection,'select * from student_info;');
if (!$query) {
	exit('<h1>查询失败</h1>');
}

//获取在数据暂存区的数据
// $row = @mysqli_fetch_assoc($query);
// 遍历结果集

while ($row = @mysqli_fetch_assoc($query)) {
	var_dump($row);
}

//释放查询结果集
mysqli_free_result($query);
//切断桥梁
mysqli_close($connection);
