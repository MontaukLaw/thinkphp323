<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/17
 * Time: 11:49
 */

namespace Home\Controller;

use Think\Controller;
use Home\Model\UserModel;


class UserController extends Controller
{
    public function addUser()
    {
        $user = new UserModel();
        $data = array(
            'user_name' => I('post.username'),
            'user_password' => I('post.password'),
            'user_nickname' => I('post.user_nickname'),
            'user_status' => I('post.user_status'),
        );
        if (!$user->create($data)) {
            $this->ajaxReturn($user->getError());
            exit;
        } else {
            $userID = $user->add();
            $this->ajaxReturn($user->find($userID));
        }
        echo 'ok';
    }


}