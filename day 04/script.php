
<?php
// 通过HTTP响应头告诉客户端后面的代码是CSS代码
// 
//header('Content-Type:application/javascript');
// 

// 这样将会直接输出一个 txt 文件
// header('Content-type: application/txt');
// 这样做就会提示下载 txt 文件 downloaded.txt
header('Content-Disposition: attachment; filename="downloaded.txt"');


?>




alert(1);