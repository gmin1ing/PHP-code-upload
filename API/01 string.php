<?php
// PHP所有能力都是函数，内置1000+函数

$str='hello';
// 获取字符串长度
echo strlen($str);
// 获取中文字符串（宽字符）的长度
// strlen中能获取拉丁文的长度
echo '<br>';
echo strlen('你好');
echo '<br>';
// PHP 中专门为宽字符集添加了一套API
// 这一套API不在内置的1000+里面，而是在一个模块中
// mb_string.dll中（模块中）===模块成员必须通过配置文件载入模块后使用
// 所有的API都是 mb_xxx
echo mb_strlen('你好');
?>