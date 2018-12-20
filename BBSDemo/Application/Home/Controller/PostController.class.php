<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/20
 * Time: 20:46
 */

namespace Home\Controller;

use Think\Controller;

class PostController extends Controller
{
    public function addPost()
    {
        $post=D('Post');
        $post->create();
        $post->add();
    }

}