<?php
$number = 123;
$bar=890;
printf("有两位小数：%.2f<br>没有小数：%u",$number,$number);
echo "<br>";
printf("有两位小数：%1\$.2f<br>没有小数：%1\$u",$number,$bar);
echo "<br>";
printf("有两位小数：%2\$.2f<br>没有小数：%2\$u",$number,$bar);
echo "<br>";
printf("有两位小数：%.2f<br>没有小数：%u",$number,$bar);

?>