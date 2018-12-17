<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<p>This part is from head.html</p>
<div class="content">
    
<!-- <p>val:<?php echo ($val); ?></p>
<p>一维数组:<?php echo ($array1["name"]); ?>:<?php echo ($array1['name']); ?></p>
<p>二维数组:<?php echo ($array2[0]['name']); ?></p>
<p>对象:<?php echo ($obj->name); ?></p>
-->
<?php if(is_array($projects)): $k = 0; $__LIST__ = $projects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project): $mod = ($k % 2 );++$k;?><p>name: <?php echo ($project["name"]); ?></p>
    <ul>
        <?php if(is_array($project["members"])): $i = 0; $__LIST__ = $project["members"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$member): $mod = ($i % 2 );++$i;?><li><?php echo ($member["id"]); ?>-<?php echo ($member["name"]); endforeach; endif; else: echo "" ;endif; ?>
    </ul><?php endforeach; endif; else: echo "" ;endif; ?>

<?php if(is_array($posts)): $key = 0; $__LIST__ = $posts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($key % 2 );++$key;?><p>ID: <?php echo ($article->article_id); ?><br>
        标题: <?php echo ($article->article_title); ?><br>
        内容: <?php echo ($article->article_content); ?><br>
        创建日期: <?php echo ($article->article_create_time); ?><br>
        作者: <?php echo ($article->author->user_name); ?><br>
        作者昵称: <?php echo ($article->author->user_nickname); ?><br>
    </p><?php endforeach; endif; else: echo "" ;endif; ?>

<p>
    资源目录为: /322/ViewDemo/Public <br>
    <script type="text/javascript" src="/322/ViewDemo/Public/Js/main.js"></script>
</p>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
</div>
<p>This part is from footer.html</p>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>