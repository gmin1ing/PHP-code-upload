<?php

// 接收提交的用户名和密码
if (empty($_POST['username'])) {
	exit('请输入用户名');
}
if (empty($_POST['password'])) {
	exit('请输入密码');
}

// 校验
$username=$_POST['username'];
$password=$_POST['password'];
if ($username =='admin' && $password =='123') {
	exit('恭喜你');
}
exit('用户名和密码错误');
// 响应