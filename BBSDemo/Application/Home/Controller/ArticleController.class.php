<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/19
 * Time: 9:34
 */

namespace Home\Controller;

use Home\Model\ArticleModel;
use Think\Controller;
use Think\Model;

class ArticleController extends UtilController
{
    public function updateArticle()
    {
        $article = M("Article"); // 实例化User对象
        $data = array(
            //param
            'article_title' => I('post.article_title'),
            'article_content' => I('post.article_content'),
        );
        $id = I('post.article_id');
        $article->create();
        $result = $article->where('article_id = ' . $id)->save($data); // 写入数据
        $this->jsonOut($result);
    }

    public function deleteArticle()
    {
        $article = D("Article"); // 实例化User对象
        //$this->ajaxReturn($article);
        $id = I('post.article_id');
        $data = $article->where('article_id = ' . $id)->delete(); //
        $this->jsonOut($data);
    }

    public function allArticle()
    {
        $page = I('post.page');
        $rows = I('post.rows');
        $article = M('Article');
        $data = $article->alias('a')->order('a.article_create_time desc')->join('INNER JOIN think_user u where u.user_id=a.author_id')->page($page, $rows)->select();
        //$this->ajaxReturn($data);
        $this->jsonOut($data);
    }

    public function countArticle()
    {
        $article = M('Article');
        $data = $article->count();
        $this->jsonOut($data);

    }

    public function addArticle()
    {
        $article = D("Article"); // 实例化User对象
        //$this->ajaxReturn($article);
        $article->create(); // 生成数据对象
        $data = $article->add(); // 写入数据
        $this->jsonOut($article->find($data));
    }

    public function adArticle()
    {
        $article = D("Article"); // 实例化User对象
        //$this->ajaxReturn($article);
        $article->create(); // 生成数据对象
        $article->add(); // 写入数据

//        if (!$article->create()){ // 创建数据对象
//            // 如果创建失败 表示验证没有通过 输出错误提示信息
//            exit($article->getError());
//        }else{
//            // 验证通过 写入新增数据
//            $article->add();
//        }
        return;
        $this->ajaxReturn($data);
        //$article = M('Article');

        $article = new ArticleModel();
        $para = array(
            'article_title' => I('post.article_title'),
            'article_content' => I('post.article_content'),
            'author_id' => I('post.user_id'),
            'sign' => I('post.sign'),
        );
        //$data=$article->add();
        $auto = array(
            array('article_create_at', 'time', 3, 'function'),
        );
        $userID = $article->auto($auto)->add($para);

        $this->ajaxReturn($article->find($userID));

        if (!$article->create($para)) {
            $this->ajaxReturn($article->getError());
            exit;
        } else {
            $userID = $article->auto()->add();
            $this->ajaxReturn($article->find($userID));
        }
        echo 'ok';

        if (!$article->create($para)) {
            $this->jsonOut($article->getError());
            //exit;
        } else {
            $articleID = $article->add();
            $this->jsonOut($article->find($articleID));
        }
        //$this->jsonOut($data);
    }
}