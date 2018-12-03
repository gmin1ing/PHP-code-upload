<?php

$connection = mysqli_connect('127.0.0.1','root','123456','min');
if (!$connection) {
	exit('<h1>数据库链接失败</h1>');
}
$query =mysqli_query($connection,'select * from users_09;');


if (!$query) {
	exit('<h1>查询失败</h1>');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理系统</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		img {
			height: 50px;
			max-width: 100px;
		}

		.container{
			margin-top: 100px;
		}

	</style>
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="#">管理系统</a>
		<ul class="navbar-nav mr-auto" >
			<li class="nav-item active"> 
				<a class="nav-link" href="list.php" >用户管理</a>
			</li>
			<li class="nav-item"> 
				<a class="nav-link" href="#" >商品管理</a>
			</li>
		</ul>
	</nav>
	<main class="container">
		<h1 class="heading">用户管理<a class="btn btn-link btn-sm" href="add.php">添加</a></h1>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>头像</th>
					<th>姓名</th>
					<th>性别</th>
					<th>年龄</th>
					<th class="text-center" width="140">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php while($item=mysqli_fetch_assoc($query)): ?>				
				<tr>
					<th scope="row"><?php echo $item['id']; ?></th>
					<td><img src="<?php echo $item['avatar']; ?>" class="rounded" alt="<?php echo $item['name']; ?>"></td>
					<td><?php echo $item['name']; ?></td>
					<td><?php echo $item['gender'] == 0 ?'♀':'♂'; ?></td>
					<td><?php echo $item['birthday'] ?></td>
					<td class="text-center">
						<a class="btn btn-info btn-sm" href="edit.php?id=<?php echo $item['id']; ?>">编辑</a>
						<a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $item['id']; ?>">删除</a>
					</td>
				</tr>
				<?php endwhile ?>
			</tbody>
		</table>
		<ul class="pagination justify-content-center">
			<li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
			<li class="page-item"><a href="#" class="page-link">1</a></li>
			<li class="page-item"><a href="#" class="page-link">2</a></li>
			<li class="page-item"><a href="#" class="page-link">3</a></li>
			<li class="page-item"><a href="#" class="page-link">&raquo;</a></li>

		</ul>
	</main>
</body>
</html>