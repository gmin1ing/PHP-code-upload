<?php


//这里是在响应头中添加一个location的头信息
header('Location: 01 content-typr.php');

//客户端浏览器在接收都这个头信息过后会自动跳转到指定的地址
//
//
// 死循环了
// header('Location: 02 location.php');