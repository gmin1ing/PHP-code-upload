<?php

function 
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
		<form action="">
			<div class="form-group">
				<label for="title">歌曲名称</label>
				<input type="text" name="title" id="title" class="form-control is-valid">
				<small class="form-text text-muted">请输入歌曲名称</small>
			</div>
			<div class="form-group">
				<label for="singer">歌手</label>
				<input type="text" name="singer" id="singer" class="form-control">
				<small class="form-text text-muted">请输入歌曲演唱者</small>
			</div>
			<div class="form-group">
				<label for="title">海报</label><br>
				<input type="file" name="paper" id="paper">
				<small class="form-text text-muted">请上传海报图片</small>
			</div>
			<div class="form-group">
				<label for="title">歌曲上传</label>
				<input type="file" name="song" id="song">
				<small class="form-text text-muted">请上传歌曲</small>
			</div>
			<button class="btn btn-primary">保存</button>
			<!-- <a href="add.php" class="btn btn-primary mb-2">添加</a> -->
		</form>
	</div>
</body>
</html>