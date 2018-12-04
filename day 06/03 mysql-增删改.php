<?php
// 增删改语句

// 1、建立与数据库服务器之间的链接
 $connection = mysqli_connect('127.0.0.1','root','123456','min');
// $connection失败返回false
if (!$connection) {
	exit('<h1>链接数据库失败</h1>');
}
// 得到的是查询对象，这个查询对象可以用来到数据库中一行一行拿数据
$query =mysqli_query($connection,'delete from student_info where id = 21;');
if (!$query) {
	exit('<h1>查询失败</h1>');
}

// 如何拿到受影响行数
// 传入的链接的对象
$rows=mysqli_affected_rows($connection);

var_dump($rows);
//切断桥梁
mysqli_close($connection);
