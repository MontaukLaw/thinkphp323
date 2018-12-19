<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/19
 * Time: 9:34
 */

namespace Home\Controller;


use Think\Controller;

class ArticleController extends UtilController
{
    public function allArticle()
    {
        $page = I('post.page');
        $rows = I('post.rows');
        $article = M('Article');
        $data = $article->alias('a')->join('INNER JOIN think_user u where u.user_id=a.author_id')->page($page, $rows)->select();
        //$this->ajaxReturn($data);
        $this->jsonOut($data);
    }
}