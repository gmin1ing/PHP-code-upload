<?php

//获取文件中记录的数据并展示=>动态生成表格的html标签

$contents = file_get_contents('storage.json');
// $contents =>json 格式的字符串
// json 格式的字符串转化为对象的过程叫做反序列化
// json——decode 默认反序列化时将 JSON 中的对象转换成 PHP中的 stdClass标准数组
// PHP中对象访问的方式  $item->id
$data = json_decode($contents);
// $data = json_decode($contents,true);
// array(3) {
//   [0]=>
//   array(5) {
//     ["id"]=>
//     string(13) "5bff4629166c7"
//     ["title"]=>
//     string(6) "错过"
//     ["artist"]=>
//     string(6) "小倩"
//     ["images"]=>
//     array(1) {
//       [0]=>
//       string(15) "./images/01.gif"
//     }
//     ["source"]=>
//     string(29) "./sing/洛晴 - 昔时辞.mp3"
//   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
	<style>
		img {
			height: 70px;
			max-width: 80px;
		}
	</style>

</head>
<body>
	<div class="container mt-5">
		<h1 class="display-3">音乐列表</h1>
		<a href="add.php" class="btn btn-primary mb-2">添加</a>
		<table class="table table-bordered table-striped table-hover">
			<thead class="thead-dark">
				<tr>
					<th>编号</th>
					<th>歌曲名称</th>
					<th>歌手</th>
					<th>海报</th>
					<th>音乐</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $item) : ?>
					<tr>
						<td name="id"><?php echo $item->id; ?></td>
						<td name="title"><?php echo $item->title; ?></td>
						<td name="artist"><?php echo $item->artist; ?></td>
						<td name="images"><a href="<?php echo $tem->images[0]; ?>"><img src="<?php echo $item->images[0]; ?>"></a></td>
						<td name="source"><audio src="<?php echo $item->source; ?>" controls></audio></td>
						<td><button class="btn btn-danger btn-small mr-2">删除</button>
							<button class="btn btn-warning btn-small">修改</button></td>
					</tr>
				<?php endforeach; ?>
				
			</tbody>
		</table>
	</div>
</body>
</html>