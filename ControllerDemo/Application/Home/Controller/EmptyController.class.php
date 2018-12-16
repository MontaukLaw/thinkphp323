<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/16
 * Time: 18:17
 */

namespace Home\Controller;


use Think\Controller;

class EmptyController extends Controller
{
    public function index()
    {
        $name = CONTROLLER_NAME;
        $this->view($name);
    }

    public function view($name)
    {
        $this->ajaxReturn($name);
    }
}