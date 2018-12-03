<?php
// 1. 代码设置
// 2、通过配置文件
date_default_timezone_set('PRC');
//time获取的是秒数为单位的时间戳
//data_timezone=’RPC‘
echo time();
echo "<br >";
// 格式一个时间戳
// 第一个是时间格式
// 第二个是时间戳
// 默认时间戳获取的是格林尼治时间
echo date('Y-m-d',time());
echo "<br >";
echo date('Y-m-d H:i:s',time());
echo "<br >";


$str = '2017-10-22 20:18:58';
$timestamp = strtotime($str);
// echo $timestamp;
echo date('Y年m月d日 <b\r> H:i:s', $timestamp);


?>