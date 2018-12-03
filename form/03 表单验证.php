<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$name = $email = $gender = $comment = $website = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		   $name = test_input($_POST["name"]);
		   $email = test_input($_POST["email"]);
		   $website = test_input($_POST["website"]);
		   $comment = test_input($_POST["comment"]);
		   $gender = test_input($_POST["gender"]);
		}

		function test_input($data) {
		   $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
		}
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
		姓名：<input type="text" name="name"><br>
		电邮：<input type="text" name="email"><br>
		网址：<input type="text" name="website"><br>
		评论：<textarea name="comment" cols="40" rows="5"></textarea><br>
		性别：<input type="radio" name="gender" value="female">女性
		<input type="radio" name="gender" value="male">男性<br>
		<input type="submit" value="提交">
	</form>

<?php
	echo "<h2>您的输入：</h2>";
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $website;
	echo "<br>";
	echo $comment;
	echo "<br>";
	echo $gender;
?>
</body>
</html>