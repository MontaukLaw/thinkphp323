<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/16
 * Time: 12:05
 */

namespace Home\Controller;

use Think\Controller;

class AnotherController extends Controller
{

    public function _before_test()
    {
        echo 'before';
    }

    public function _after_test()
    {
        echo 'after';
    }
    
    public function test()
    {
        echo 'If you can see this, you are the hero!';
    }
}