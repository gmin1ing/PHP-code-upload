<?php
	$myfile=file_get_contents('score.txt');
	$lines=explode("\n", $myfile);
	$data=array();
	foreach ($lines as $item) {
		if (item==='') continue;
		$cols=explode('|', $item);
		$data[]=$cols;
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<thead>
			<td>编号</td>
			<td>姓名</td>
			<td>名次</td>
			<td>成绩</td>
			<td>网址</td>
		</thead>
		<tbody>
			<?php foreach ($data as $line) : ?>
				<tr>
					<?php foreach ($line as $col): ?>
						<?php $col=trim($col) ?>
						<?php if (strpos($col, 'http://')===0) : ?>
							<td><a href="<?php echo strtolower($col); ?>"><?php echo substr($col, 7) ?></a></td>
							<<?php else: ?>
							<td><?php echo $col; ?></td>
						<?php endif ?>	
					<?php endforeach ?>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>