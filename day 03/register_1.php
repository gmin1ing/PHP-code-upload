<?php

// 表单处理三部曲
// 1、接收并校验表单数据
// 2、持久化
// 3、响应
// 
// 接收用户提交的数据，保存到TXT文件中
if ($_SERVER['REQUEST_METHOD']==='POST') {
	// 1 校验参数到完整性
	if (empty($_POST['username'])) {
		//没有提交用户名 或者用户名为空
		$message = '用户名没有填写';
	} else {
		if (empty($_POST['password'])) {
		//没有提交用户名 或者用户名为空
		$message = '请填写密码';
		} else {
			if (empty($_POST['confirm'])) {
				//没有提交用户名 或者用户名为空
				$message = '请填写确认密码';
			}else {
				if ($_POST['password'] != $_POST['confirm']) {
						$message = '两次输入的不一致';
				} else {
					if (!(isset($_POST['agree']) && $_POST['agree']==='on')) {
							$message = '必须同意协议';
					} else {
						//所有的校验均成功
							$username=$_POST['username'];
							$password=$_POST['password'];
							file_put_contents('users.txt', $username.'|'.$password."\n",FILE_APPEND);
							$message='注册成功';
					}
				}
			}
		}
	}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<table>
			<tr>
				<td><label for="username"></lable>用户名：</td>
				<td><input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? $_POST['username']:''; ?>">
				</td>
			</tr>
			<tr>
				<td><label for="password">密码:</label></td>
				<td><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td><label for="confirm">确认密码:</label></td>
				<td><input type="password" name="confirm" id="confirm"></td>
			</tr>
			<tr>
				<td></td>
				<td><label><input type="checkbox" name="agree" <?php if($_POST['agree']==='on') echo "checked"; ?>> 同意注册协议</label></td>
			</tr>
			<?php if (isset($message)): ?>
			<tr>
				<td></td>
				<td><?php echo $message; ?></td>
			</tr>
			<?php endif ?>
			<tr>
				<td></td>
				<td><button>注册</button></td>
			</tr>

		</table>
	</form>
</body>
</html>