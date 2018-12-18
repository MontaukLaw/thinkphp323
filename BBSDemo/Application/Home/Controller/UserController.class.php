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
    public function findUserByUsernameAndPassword()
    {
        //$userM = M('User');
        $userM=new UserModel();
        $condition = array(
            'user_name' => I('post.username'),
            'user_password' => I('post.password'),
        );

        $data = $userM->field('user_nickname,user_name,user_id')->where($condition)->select();

        //先测试一下SQL是否work
        //$sql = $userM->field('user_nickname,user_name,user_id')->where($condition)->fetchSql()->select();
        //$this->ajaxReturn($sql);

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