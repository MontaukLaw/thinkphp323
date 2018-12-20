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

<form method="post" action="../article/addarticle">
    <input tyep="type" name="article_title" value="xxxx"/>
    <input type="type" name="article_content" value="content"/>
    <input type="submit" value="go"/>

</form>

<form method="post" action="../user/addUser">
    <input tyep="type" name="user_name" value="xxxx"/>
    <input tyep="type" name="user_nickname" value="user_nickname"/>
    <input type="type" name="user_password" value="user_password"/>
    <input type="submit" value="go"/>

</form>


<form method="post" action="../post/addPost">
    <input tyep="type" name="post_content" value="post_content"/>
    <input type="submit" value="go"/>

</form>



</div>
<p class="footer"></p>

<script src="/322/BBSDemo/Public/js/jquery.js"></script>
<script src="/322/BBSDemo/Public/js/popper.min.js"></script>
<script src="/322/BBSDemo/Public/js/bootstrap.min.js"></script>

</body>
</html>