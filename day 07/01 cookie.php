<?php
// 设置响应头中的 Set-Cookie 可以 给客户端下发小票
// 
// header 在设置相同的键时，会出现覆盖的情况
// header('Set-Cookie:foo=bar');
// header('Set-Cookie:foo1=bar1');
// 设置cookie
// 
setcookie('key1', 'value1');
setcookie('key2', 'value2');
// 只传递一个参数时删除
// 原理：设置到期时间为一个过去的时间
// setcookie('key1',"",time()-3600);
setcookie('key1');
// setcookie('key2',"",time()-3600);
//传递三个参数时设置过期时间
//不传递就是会话级别的cookie（关闭浏览器就自动删除）
// setcookie('key3','value3',time()+1*24*60*60);

// setcookie('key3','value3',time()+1*24*60*60);

?>