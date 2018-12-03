<?php

// 能通过PHP代码执行一个SQL语句得到查询的结果

// mb_strlen(str)
// 类似于之前的宽字符集函数问题，mysqli是一个额外的扩展
// 如果想要使用这个扩展提供的函数，必须开启扩展

// phpinfo();
// 如果需要在调用函数时忽略错误或者警告可以在函数名之前加上@
// $connection = @mysqli_connect('127.0.0.1','rot','123456','min'); // 调用函数时忽略错误

// 1、建立与数据库服务器之间的链接
 $connection = mysqli_connect('127.0.0.1','root','123456','min');
// $connection失败返回false
if (!$connection) {
	exit('链接数据库失败');
}
// 得到的是查询对象，这个查询对象可以用来到数据库中一行一行拿数据
$query =mysqli_query($connection,'select * from student_info;');

//获取在数据暂存区的数据
// $row = @mysqli_fetch_assoc($query);
// 遍历结果集
while ($row = @mysqli_fetch_assoc($query)) {
	var_dump($row);
}