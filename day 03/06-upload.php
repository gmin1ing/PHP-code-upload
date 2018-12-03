<?php

function upload(){
	if (!isset($_FILES['ava'])) {
		//客户端没有文件域
		$GLOBALS['message']='别开玩笑啦！';
		return;
	}
	$ava=$_FILES['ava'];
	// array(5) {
	//   ["name"]=>
	//   string(20) "3c96f05c90d565c1.gif"
	//   ["type"]=>
	//   string(9) "image/gif"
	//   ["tmp_name"]=>
	//   string(26) "/private/var/tmp/php7wKeq1"
	//   ["error"]=>
	//   int(0)
	//   ["size"]=>
	//   int(182359)
	// }
	echo $ava["error"];
	if ($ava['error']!==UPLOAD_ERR_OK) {
		//服务端没有接收到上传文件
		$GLOBALS['message']='上传失败';
		return;
	}

	//接收到了文件
	//将文件从临时目录移动到网站目录下
	$source=$ava['tmp_name'];
	$target='./uploads/'.$ava['name'];
	$moved = move_uploaded_file($source, $target);
	if (!$moved) {
		$GLOBALS['message']='上传失败';
		return;
	}
	echo "123";	

}

if ($_SERVER['REQUEST_METHOD']==='POST') {
	upload();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		<input type="file" name="ava">
		<button>上传</button>
		<?php if(isset($message)): ?>
			<p> <?php echo $message; ?></p>
		<?php endif ?>
	</form>
</body>
</html>