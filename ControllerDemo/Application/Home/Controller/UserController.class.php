<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/16
 * Time: 18:12
 */

namespace Home\Controller;


use Think\Controller;

class UserController extends Controller
{

    public function _empty($name)
    {
        $this->view($name);
    }

    public function view($name)
    {
        echo $name;
    }
}