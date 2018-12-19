<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/18
 * Time: 14:43
 */

namespace Home\Controller;

use Home\Common\JsonMsg;
use Home\Model\UserModel;
use Think\Controller;

class UserController extends Controller
{
    public function login()
    {
        $this->display();
    }

    public function checkLogin()
    {
        $data = $this->findUserByUsernameAndPassword();
        if ($data != null) {

        }
    }

    public function getUidSession()
    {
        $userID = session('userid');
        $nickname = session('nickname');
        $obj = new \stdClass();
        $obj->user_id = $userID;
        $obj->user_nickname = $nickname;
        $this->jsonOut($obj);

    }

    public function confirmLogin()
    {
        //$username = I('post.username');
        $userID = I('post.user_id');
        $nickname = I('post.user_nickname');
        session('userid', $userID);
        session('nickname', $nickname);
        //session('userid',$userID);
        $this->jsonOut('good');
    }

    public function findUserByUsernameAndPassword()
    {
        //$userM = M('User');
        $userM = new UserModel();
        $condition = array(
            //param
            'user_name' => I('post.username'),
            'user_password' => I('post.password'),
        );
        //if(IS_AJAX){
        //$this->ajaxReturn('ajax');
        //}

        //$this->ajaxReturn($_SERVER['REQUEST_METHOD']);
        //$this->ajaxReturn($condition);

        $data = $userM->field('user_nickname,user_name,user_id')->where($condition)->select();

        //先测试一下SQL是否work
        //$sql = $userM->field('user_nickname,user_name,user_id')->where($condition)->fetchSql()->select();
        //$this->ajaxReturn($sql);
        //return $data;
        $this->jsonOut($data);

    }

    public function jsonOut($data)
    {
        $jsonMsg = new JsonMsg();
        if ($data == null) {
            $jsonMsg->success = false;
            $jsonMsg->msg = 'ERROR';
        } else {
            $jsonMsg->obj = $data;
            $jsonMsg->msg = 'OK';
        }
        $this->ajaxReturn($jsonMsg);

    }
}