<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/18
 * Time: 14:40
 */

namespace Home\Model;

use \Think\Model;

class UserModel extends Model
{
    protected $_auto = array(
//        array('user_create_time', '1'),  // 新增的时候把status字段设置为1
//        array('password', 'md5', 3, 'function'), // 对password字段在新增和编辑的时候使md5函数处理
//        //  array('name','getName',3,'callback'), // 对name字段在新增和编辑的时候回调getName方法
        array('user_create_time', 'time', 3, 'function'),
        array('user_update_time', 'time', 3, 'function')
        // 对update_time字段在更新的时候写入当前时间戳
    );

}