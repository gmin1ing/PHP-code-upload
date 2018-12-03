<?php
// 接收要修改的数据 ID
if (empty($_GET['id'])) {
	exit('<h1>必须传入指定id</h1>');
}
$id = $_GET['id'];
$connection = mysqli_connect('127.0.0.1','root','123456','min');
if (!$connection) {
	exit('<h1>数据库链接失败</h1>');
}


// 因为ID是唯一的，那么找到满足条件的就不再继续了 limit 1
// 
$query =mysqli_query($connection,"select * from users_09 where id ={$id} limit 1;");
if (!$query) {
	exit('<h1>查询失败</h1>');
}
$users=mysqli_fetch_assoc($query);
if (!$users) {
	exit('<h1>找不到你要编辑的数据</h1>');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理系统</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
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
		<h1 class="heading">编辑"<?php echo $users['name']; ?>"</h1>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" autocomplete="off" >
			<div class="form-group">
				img
				<label for="avatar">头像</label>
				<input type="file" class="form-control" id="avatar" name="avatar">
			</div>
			<div class="form-group">
				<label for="avatar">姓名</label>
				<input type="text" class="form-control" id="name" name="name" value="<?php echo $users['name']; ?>">
			</div>
			<div class="form-group">
				<label for="avatar">性别</label>
				<select class="form-control" id="gender" name="gender">
					<option value="-1">请选择性别</option>
					<option value="1"<?php echo $users['gender']==='1'?' selected':''; ?>>男</option>
					<option value="0"<?php echo $users['gender']==='0'?' selected':''; ?>>女</option>
				</select>
			</div>
			<div class="form-group">
				<label for="birthday">生日</label>
				<input type="date" class="form-contral" id="birthday" name="birthday" value="<?php echo $users['birthday']; ?>"> 
			</div>
			<button class="btn btn-primary">保存</button>
			<?php if (isset($error_message)): ?>
				<div class="alert alert-warning">
					<?php echo $error_message; ?>
				</div>
			<?php endif ?>
			
		</form>
	</main>
</body>
</html>