<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
这是read session的页面
<?php
$val=cookie('ucid'); echo '<br>'; echo 'cookie : '.$val; echo '<br>'; $val2=session('usid'); echo 'session : '.$val2; ?>
</body>
</html>