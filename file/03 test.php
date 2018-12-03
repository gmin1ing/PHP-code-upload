<?php
	$myfile=file_get_contents("a.txt");
	// while (!feof($myfile)) {
	// 	$myline = fgets($myfile)."<br>";
	// 	$mylineArray=str_split($myline);
		
	// }
	// 
	$data = array();
	$lines=explode("\n", $myfile);
	foreach ($lines as $item) {
		if ($item==='') continue;
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
			<tr>
				<td>编号</td>
				<td>姓名</td>
				<td>名次</td>
				<td>成绩</td>
				<td>网址</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $line) : ?>
				<tr>
					<?php foreach ($line as $col) : ?>
						<?php $col=trim($col); ?>
						<?php if (strpos($col, 'http://')===0) : ?>
							<td><a href="<?php echo strtolower($col); ?>"><?php echo substr($col, 7); ?></a></td>
						<?php else: ?>
							<?php if (strlen($col)<3) : ?>
								<td><?php echo str_pad($col,3,'0',STR_PAD_LEFT ); ?></td>
							<?php else: ?>
								<td><?php echo $col ?></td>
							<?php endif ?>	
						<?php endif ?>	
					<?php endforeach ?>
				</tr>
			<?php endforeach?>


		</tbody>
	</table>
</body>
</html>