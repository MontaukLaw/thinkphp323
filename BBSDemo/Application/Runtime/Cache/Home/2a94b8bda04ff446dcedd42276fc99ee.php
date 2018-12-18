<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/322/BBSDemo/Public/css/bootstrap.min.css">
</head>
<body>
<p class="header"></p>
<div class="content">
    

<?php
echo session('userid'); echo session('nickname'); ?>
</div>
<p class="footer"></p>

<script src="/322/BBSDemo/Public/js/jquery.js"></script>
<script src="/322/BBSDemo/Public/js/popper.min.js"></script>
<script src="/322/BBSDemo/Public/js/bootstrap.min.js"></script>

</body>
</html>