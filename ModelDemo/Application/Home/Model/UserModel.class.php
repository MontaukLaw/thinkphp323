<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/16
 * Time: 19:50
 */

namespace Home\Model;

class UserModel extends \Think\Model
{
    public $_validate = array(
        array('user_name', 'require', '用户名不能为空'),
        array('user_nickname', 'require', '昵称不能为空'),
        array('user_password', 'require', '密码不能为空', self::MUST_VALIDATE, '', self::MODEL_INSERT),
        array('user_password', '6,20', '密码长度6-20', self::EXISTS_VALIDATE, 'length'),
        //array('user_password', 'user_repassword', '两次输出的密码不一致', 0, 'confirm', 1),
    );

    public $_auto = array(
        //表示在插入数据的时候, 自动插入当前时间键值到create_time
        array('user_create_time', 'time', self::MODEL_INSERT, 'function'),
        //自动给密码加MD5摘要
        array('user_password', 'md5', self::MODEL_BOTH, 'function'),
        //更新的时候, 自动加入update_time
        array('user_update_time', 'time', self::MODEL_BOTH, 'function'),
        //array('user_password', 'user_repassword', '两次输出的密码不一致', 0, 'confirm', 1),
    );

    public function getSpecifyField()
    {
        return $this->field('id,nickname');
    }


}