<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/322/BBSDemo/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/322/BBSDemo/Public/css/signin.css">
</head>
<body>
<p class="header"></p>
<div class="content">
    

<form id="login_form" class="form-signin">
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">请登录</h1>
    <label for="inputUsername" class="sr-only">用户名</label>
    <input name="username" type="text" id="inputUsername" class="form-control" placeholder="用户名" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="密码" required>
    <div class="checkbox mb-3" style="text-align: center">
        <label>
            <input type="checkbox" value="remember-me"> 记住我
        </label>
    </div>
</form>
<button id="submit_btn" class="btn btn-lg btn-primary btn-block" type="submit">登陆</button>
<p class="mt-5 mb-3 text-muted" style="text-align: center">简单留言板系统 &copy; 2017-2018</p>



</div>
<p class="footer"></p>

<script src="/322/BBSDemo/Public/js/jquery.js"></script>
<script src="/322/BBSDemo/Public/js/popper.min.js"></script>
<script src="/322/BBSDemo/Public/js/bootstrap.min.js"></script>


<script>
    //搞简单点儿, 直接就是ajax拿接口, 然后写session, 重定向.
    $(document).ready(function () {

        $('#submit_btn').click(function () {
            //console.info('submit');
            var username = $('#inputUsername').val();
            var password = $('#inputPassword').val();
            var loginCheckUrl = "findUserByUsernameAndPassword";
            $.post(
                loginCheckUrl,
                $("#login_form").serialize(),
                function (data) {
                    console.info(data);
                    if (data.success == true) {
                        //登陆成功
                        console.info(data.obj[0].user_name);
                        confirmLogin(data.obj[0].user_name);
                    }
                }
            );

            //console.info(username + '' + password);
        })

    });

    function confirmLogin(username) {
        $.post(
            'confirmLogin',
            {username: username},
            function (data) {
                console.info(data.success);
                if (data.success == true) {
                    //登陆成功

                }
            }
        );
    }
</script>
</body>
</html>