<?php
header("Content-type:text/html;charset=utf-8");   
$connection=mysqli_connect('127.0.0.1','root','123456','min');
if (!$connection) {
	exit('<h1>数据库连接失败</h1>');
}
// 在查询数据之前设置
// 必须传入连接对象和编码
mysqli_set_charset($connection,'utf8');

$query =mysqli_query($connection,'select * from list_show;');
if (!$query) {
	exit('<h1>查询失败</h1>');
}
while ($item=mysqli_fetch_assoc($query)) {
	var_dump($item);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<thead>
			<?php while($item=mysqli_fetch_assoc())?>
			<tr>
				<th scope="col">编号</th>
				<th scope="col">名称</th>
				<th scope="col">操作</th>
			</tr>
			<?php?>
		</thead>
		<tbody>
			<tr>
			<th scope="row">1</th>
			<td>有趣的人</td>
			<td><a href="" >删除</a></td>
		</tr>
		</tbody>
		
	</table>
</body>
</html>