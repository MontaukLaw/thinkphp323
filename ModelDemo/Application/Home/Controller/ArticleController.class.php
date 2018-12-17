<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/17
 * Time: 10:48
 */

namespace Home\Controller;

use Home\Model\Article;
use Think\Controller;
use Home\Model\ArticleViewModel;
use Home\Model\ArticleModel;

class ArticleController extends Controller
{
    public function allArticle()
    {
        $article = M('Article');
        $data = $article->alias('a')->join('INNER JOIN think_user u where u.user_id=a.author_id')->page(0, 10)->select();
        $this->ajaxReturn($data);
    }

    public function findArticleByAuthorID()
    {
        $article = M('Article');
        $data = $article->alias('a')->join('INNER JOIN think_user u ON u.user_id=a.author_id')->where('a.author_id=' . I('post.id'))->page(0, 10)->select();
        $sql = $article->alias('a')->join('INNER JOIN think_user u ON u.user_id=a.author_id')->where('a.author_id=' . I('post.id'))->page(0, 10)->fetchSql()->select();
        if ($data != null) {
            for ($i = 0; $i < sizeof($data); $i++) {
                $data[$i]['user_password'] = "";
            }
        }
        $this->ajaxReturn($data);
    }

    public function searchArticleByTitle()
    {
        $article = M('Article');
        $condition['article_title'] = array('like', '%' . I('post.title') . '%');
        $data = $article->where($condition)->page(0, 10)->select();
        $this->ajaxReturn($data);
    }

    public function getArticle()
    {
        $vm = new ArticleViewModel();
        $data = $vm->select();
        $this->ajaxReturn($data);
    }

    public function getArticleWithAuthor()
    {
        $am = new ArticleModel();
        $param = I('post.id');
        //$data = $am->relation('author')->fetchSql()->find();
        $data = $am->relation('author')->select();
        $this->ajaxReturn($data);
    }

}