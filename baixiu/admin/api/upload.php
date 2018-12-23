<?php


// var_dump($_FILES['avatar']);


// 接收文件，保存文件，返回文件的URL地址



if (empty($_FILES['avatar'])) {
	exit('缺少必要文件');
}

$avatar = $_FILES['avatar'];
if ($avatar['error']!==UPLOAD_ERR_OK) {
	exit('上传失败');
}

 // 校验文件类型大小
$ext = pathinfo($avatar['name'],PATHINFO_EXTENSION);
$target = '../../static/uploads/img-'.uniqid().'.'.$ext;

 if (!move_uploaded_file($avatar['tmp_name'], $target)) {
 	exit('上传失败');
 }

 echo substr($target, 5);