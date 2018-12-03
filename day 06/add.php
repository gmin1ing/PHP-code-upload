<?php

function add_users(){
	// 验证表单
	// 取值
	// 接收并验证表单
	// 保存
	// 响应
	if (empty($_POST['name'])) {
		$GLOBALS['error_message']='请填写姓名';
		return;
	}
	if (!(isset($_POST['gender']) && ($_POST['gender'])!=='-1') ){
		$GLOBALS['error_message']='请选择性别';
		return;
	}
	if (empty($_POST['birthday'])) {
		$GLOBALS['error_message']='请填写出生年月';
		return;
	}
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$birthday = $_POST['birthday'];

	if (empty($_FILES['avatar'])) {
		$GLOBALS['error_message']='请上传头像';
		return;
	}
	$ext =pathinfo($_FILES['avatar']['name'],PATHINFO_EXTENSION);
	// =>jpg
	$target = '../../uploads/avatar-'.uniqid().'.'.$ext;
	if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $target)) {
		$GLOBALS['error_message']='上传头像失败';
		return;
	}
	 $avatar = substr($target,5);
	// $avatar =$target;
	
	 $connection = mysqli_connect('127.0.0.1','root','123456','min');
	if (!$connection) {
		exit('<h1>数据库链接失败</h1>');
	}

	$query =mysqli_query($connection,"insert into users_09 values(null,'{$name}',{$gender},'{$birthday}','{$avatar}');");


	if (!$query) {
		$GLOBALS['error_message']='查询过程失败';
		return;
	}

	$affected_rows = mysqli_affected_rows($connection);

	if ($affected_rows!==1) {
		$GLOBALS['error_message']='添加数据失败';
		return;
	}
	header('Location: list.php');
	
}

if ($_SERVER['REQUEST_METHOD']==='POST') {
	add_users();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理系统</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="#">管理系统</a>
		<ul class="navbar-nav mr-auto" >
			<li class="nav-item active"> 
				<a class="nav-link" href="list.php" >用户管理</a>
			</li>
			<li class="nav-item active"> 
				<a class="nav-link" href="#" >商品管理</a>
			</li>
		</ul>
	</nav>
	<main class="container mt-5">
		<h1 class="heading">添加用户</h1>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" autocomplete="off" >
			<div class="form-group">
				<label for="avatar">头像</label>
				<input type="file" class="form-control" id="avatar" name="avatar">
			</div>
			<div class="form-group">
				<label for="avatar">姓名</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="avatar">性别</label>
				<select class="form-control" id="gender" name="gender">
					<option value="-1">请选择性别</option>
					<option value="1">男</option>
					<option value="0">女</option>
				</select>
			</div>
			<div class="form-group">
				<label for="birthday">生日</label>
				<input type="date" class="form-contral" id="birthday" name="birthday"> 
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