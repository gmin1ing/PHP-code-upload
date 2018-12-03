<?php
// 接收要删除的数据的id
if (empty($_GET['id'])) {
	exit('<h1>必须传入指定id</h1>');
}
$id = $_GET['id'];
$connection = mysqli_connect('127.0.0.1','root','123456','min');
if (!$connection) {
	exit('<h1>数据库链接失败</h1>');
}

$query =mysqli_query($connection,'delete from users_09 where id ='. $id .';');
// $query =mysqli_query($connection,'delete from users_09 where id in（'. $id .');');
if (!$query) {
	exit('<h1>查询失败</h1>');
}

$affectd_rows= mysqli_affected_rows($connection);
if ($affectd_rows <= 0) {
	exit('<h1>删除失败</h1>');
}
header('Location: list.php');
?>