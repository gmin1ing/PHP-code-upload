<?php
	if ($_SERVER['REQUEST_METHOD']==='POST') {
		// 接收文件使用$_FILES 的超全局变量
		var_dump($_FILES);	
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- 如果一个表单中有文件域（文件上传），必须将表单的 method="post" enctype="multipart/form-data"-->
	<!-- enctype 默认是 urlencoded 格式是 key1=value1 & key2=value2 -->
	<!-- Form Data -->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" >
		<input type="file" name="img">

	<!-- <input type="text" name="foo">
	<input type="text" name="aa">
	<input type="password" name="pd"> -->
		<button>提交</button>
	</form>
</body>
</html>