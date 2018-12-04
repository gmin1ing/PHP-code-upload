<?php

session_start();
if (empty($_SESSION['num'])||empty($_GET['num'])) {
	$num = rand(0, 100);
	$_SESSION['num']=$num;
}else {
	$count = empty($_SESSION['count']) ? 0 : $_SESSION['count'];
	if ($count < 10) {
		$result = (int)$_GET['num']-$_SESSION['num'];
		if ($result == 0) {
			$message = '猜对了';
			unset($_SESSION['num']);
			unset($_SESSION['count']);
		} elseif ($result>0) {
			$message = '太大了';
		} else {
			$message = '太小了';
		}
		$_SESSION['count']=$count + 1;
	}else{
		$message = '失败';
		unset($_SESSION['num']);
		unset($_SESSION['count']);
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
	<?php if(isset($message)): ?>
	<p><?php echo $message; ?></p>
	<?php endif ?>
	<p>hi, 我已经准备了一个 0-100 的数字，你需要在仅有的 10 次机会之内猜对它</p>
	<form action="08 guess_number_2.php" method="get">
		<input type="number" min="0" max="100" name="num" placeholder="随便猜">
		<button type="submit">试一试</button>
	</form>
</body>
</html>