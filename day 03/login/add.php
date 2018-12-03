<?php

function add_music(){
	// 目标：
	// 将用户提交过来的数据保存到 storage.json 中
	// 步骤
	// 1、接收校验
	// 2、持久化
	// 3、响应
	// 校验上传的文本框问题
	if (empty($_POST['title'])) {
		$GLOBALS['error_message']='请输入标题!';
		return;
	}
	if (empty($_POST['artist'])) {
		$GLOBALS['error_message']='请输入歌手名字!';
		return;
	}
	//校验上传的文件问题
	if (empty($_FILES['source'])) {
		// 客户端提交的表单中没有这个文件域
		$GLOBALS['error_message']='请正确提交文件';
		return;
	}
	$source=$_FILES['source'];
	// 判断用户是否选择了文件
	if ($source['error']!==UPLOAD_ERR_OK) {
		$GLOBALS['error_message']='请选择音乐文件';
		return;
	}
	// 音乐上传，但是在临时文件目录
	
	//校验文件的类型与大小
	if ($source['size'] > 10 * 1024 * 1024) {
		$GLOBALS['error_message']='音乐文件过大';
		return;
	}
	if ($source['size'] < 1 * 1024 * 1024) {
		$GLOBALS['error_message']='音乐文件过小';
		return;
	}

	//类型
	$allowed_type = array('audio/mp3','audio/wma');
	if (!in_array($source['type'], $allowed_type)) {
		$GLOBALS['error_message']='不支持的音乐文件';
		return;
	}
	mkdir("./sing", 0700);
	// mkdirs("./song");
	$target= "./sing/".uniqid().'-'.$source['name'];
	if (!move_uploaded_file($source['tmp_name'], $target)) {
		$GLOBALS['error_message']='音乐文件上传失败';
		return;
	}
	//上传和移动都成功
	//
	//
	//校验上传的文件问题
	//校验图片
	if (empty($_FILES['images'])) {
		// 客户端提交的表单中没有这个文件域
		$GLOBALS['error_message']='请正确提交文件';
		return;
	}
	$images=$_FILES['images'];
	// 判断用户是否选择了文件
	if ($images['error']!==UPLOAD_ERR_OK) {
		$GLOBALS['error_message']='请选择图片文件';
		return;
	}
	// 上传，但是在临时文件目录
	
	//校验文件的类型与大小
	if ($images['size'] > 1 * 1024 * 1024) {
		$GLOBALS['error_message']='图片文件过大';
		return;
	}

	//类型
	$allowed_type = array('image/jpeg','image/png','image/jpg','image/gif');
	if (!in_array($images['type'], $allowed_type)) {
		$GLOBALS['error_message']='不支持的图片格式';
		return;
	}
	mkdir("./images", 0700);
	$target= "./images/".uniqid().'-'.$images['name'];
	if (!move_uploaded_file($images['tmp_name'], $target)) {
		$GLOBALS['error_message']='图片文件上传失败';
		return;
	}



	//2、存储数据
	$title=$_POST['title'];
	$artist=$_POST['artist'];
	$images='图片';
	$source='音乐';
	
	
	$origin = json_decode(file_get_contents('storage.json'),TRUE);

	$origin[]=array(
		'id' => uniqid(),
		'title' => $_POST['title'], 
		'artist' => $_POST['artist'], 
		'title' => $_POST['title'], 
		'title' => $_POST['title']
	);
	$json = json_encode($origin);
	file_put_contents('storage.json', $json);
	header('Location: list.php');
}

function mkdirs($dir, $mode = 0777)
{
    if (is_dir($dir) || @mkdir($dir, $mode)) return TRUE;
    if (!mkdirs(dirname($dir), $mode)) return FALSE;
    return @mkdir($dir, $mode);
} 


if ($_SERVER['REQUEST_METHOD']==='POST') {
	add_music();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
<body>
	<div class="container mt-5">
		<h1 class="display-3">添加音乐</h1>
		<?php if(isset($error_message)):?>
		<div class="alert alert-danger" role="alert">
		  <?php echo $error_message; ?>
		</div>
		<?php endif ?>
		<hr>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="title">歌曲名称</label>
				<input type="text" name="title" id="title" class="form-control is-valid"  placeholder="请输入歌曲名称">
			</div>
			<div class="form-group">
				<label for="artist">歌手</label>
				<input type="text" name="artist" id="artist" class="form-control" placeholder="请输入歌曲演唱者">
			</div>
			<div class="form-group">
				<label for="images" >海报</label>
				<input type="file" name="images" id="images" class="form-control" accept="image/*">
			</div>
			<div class="form-group">
				<label for="source">歌曲上传</label>
				<!-- accept 可以限制文件域可以选择的文件种类，值是 MIME Type -->
				<!-- 这里只是为了界面友好，不可以因此作为验证逻辑 -->
				<input type="file" name="source" id="source" class="form-control" accept="audio/*">
			</div>
			<button class="btn btn-primary">保存</button>
		</form>
	</div>
</body>
</html>