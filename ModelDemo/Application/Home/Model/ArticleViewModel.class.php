<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/17
 * Time: 15:03
 */

namespace Home\Model;

use Think\Model\ViewModel;

class ArticleViewModel extends ViewModel
{

    public $viewFields = array(
        'Article' => array(
            'article_id', 'article_title', 'article_content', 'article_create_time'
        ),
        'User' => array('user_id' => 'author_id', 'user_name' => 'author_name', '_on' => 'Article.author_id=user.user_id')
    );



}