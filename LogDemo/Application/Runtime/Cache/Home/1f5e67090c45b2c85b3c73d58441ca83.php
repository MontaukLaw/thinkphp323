<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
这是write session的页面
<?php
$val=cookie('ucid'); echo $val; $val2=session('ucid'); echo $val2; ?>
</body>
</html>