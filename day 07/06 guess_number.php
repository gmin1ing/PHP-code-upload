<?php



if ($_SERVER['REQUEST_METHOD']==='GET') {
	$num = rand(0, 100);
	// 不能存在文件中，因为可能有多用户登录
	// file_put_contents('number.txt', $num);
	// cookie 是每个用户自己保存
	setcookie("num",$num);
}else {
	// 用户来试一试
	// 对比用户提交的数字和用户cookie 中存放的被比较的数字
	// $_POST['num']; ==>用户
	// $_COOKIE['num']; ==> 正确
	$result = (int)$_POST['num']-(int)$_COOKIE['num'];
	if ($result==0) {
		echo '猜对了';
	} elseif ($result>0) {
		echo '太大了';
	} else {
		echo '太小了';
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		body {
			background-color: rgb(20,25,55);
			text-align: center;
			margin-top: 100px;
			color: #fff;
		}
		h1 {
			font-size: 50px;
		}
		p {
			font-size: 30px;
			margin: 10px 0;
		}
		input {
			padding: 5px 20px;
			height: 50px;
			width: 300px;
			background-color: #3b4b59;
			border: 1px solid #c0c0c0;
			font-size: 20px;
			box-sizing: border-box;
		}
		button {
			height: 50px;
			font-size: 16px;
			padding: 5px 20px;
		}
	</style>
</head>
<body>
	<h1>猜数字游戏</h1>
	<p>hi, 我已经准备了一个 0-100 的数字，你需要在仅有的 10 次机会之内猜对它</p>
	<form action="06 guess_number.php" method="post">
		<input type="number" min="0" max="100" name="num" placeholder="随便猜">
		<button type="submit">试一试</button>
	</form>
</body>
</html>