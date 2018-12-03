<?php

if ($_SERVER['REQUEST_METHOD']==='POST') {
	var_dump($_POST);
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
	<lable><input type="radio" name="gender" value="male">男</lable>
	<lable><input type="radio" name="gender" value="female">女</lable>
	<br>
	<!-- 如果选中默认为on ，如果不希望显示on可以使用value属性 -->
	<lable><input type="checkbox" name="agree" value="true">同意协议</lable>
	<br>

	<lable><input type="checkbox" name="funs[]" value="football">足球</lable>
	<lable><input type="checkbox" name="funs[]" value="basketball">篮球</lable>
	<lable><input type="checkbox" name="funs[]" value="earth">地球</lable>
	<br>
	<select name="status">
		<option>激活</option>
		<option>未激活</option>
		<option>代激活</option>
	</select>
	<br>
	<input type="file">
	
	<button>提交</button>
	</form>
</body>
</html>