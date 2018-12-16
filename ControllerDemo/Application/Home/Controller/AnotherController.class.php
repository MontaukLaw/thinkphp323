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
    public function index()
    {
        $this->redirect('login');
    }

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
        echo '<br>';
        echo U("Another/test", "id=1&role=admin");
    }

    public function orderConfirm()
    {
        $waitSeconds = 5;
        $this->success('抢购成功, ' . $waitSeconds . '秒后跳转到首页', U('index'), $waitSeconds);
    }

    public function loginFail()
    {
        $waitSeconds = 5;
        $this->error('登陆失败, ' . $waitSeconds . '秒后跳转到首页', U('index'), $waitSeconds);
    }

    public function getJsonTest()
    {

        $a = array('id' => 1, 'username' => 'a', 'password' => 'nopassw0rd');
        $b = array('id' => 2, 'username' => 'b', 'password' => 'passw0rd');
        $data = array(
            $a, $b,
        );
        $this->ajaxReturn($data);
    }

    public function login()
    {
        echo 'please log in';
    }

    public function resfulTest()
    {
        if (IS_POST) {
            echo 'post方法';
        } else if (IS_GET) {
            echo 'get方法';
        } else if (IS_PUT) {
            echo "put方法";
        } else if (IS_DELETE) {
            echo 'delete方法';
        }
    }

    public function getUID()
    {
        $uid = $_SESSION('user_id');
        echo $uid;
    }

    public function getCookie()
    {
        print_r($_COOKIE);
    }

    public function getPostParam()
    {
        //$aa = $_POST['aa'];
        $aa=I('post.username');
        $this->ajaxReturn($aa);
    }

    public function getHostname()
    {
        $host = $_SERVER['HTTP_HOST'];
        echo $host;
    }

    public function getServerInfo()
    {
        $serverInfo = $_SERVER;
        print_r($serverInfo);
    }
}