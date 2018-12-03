<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登录</title>
</head>
<body>
	<!-- 1、必须有form标签
		 2、form必须指定 action和method
		 不设置 action 默认是当前页面（必须设置，否则有兼容问题）
		 不设置 method 默认是 get
		 3、表单元素（表单域） 必须有 name （如果希望被提交的情况）
		 4、表单必须有一个提交按钮
     -->
	<form action="10-foo.php" method="post">
	<table border="1">
		<tr>
			<td>用户名</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>密码</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<!-- input : submit image -->
			<!-- button -->
			<td><input type="submit" value="登录"></td>
		</tr>
	</table>
	</form>
</body>
</html>