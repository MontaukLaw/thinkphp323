<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/20
 * Time: 20:45
 */

namespace Home\Model;


use Think\Model;

class PostModel extends Model
{
    protected $_auto = array(
        array('post_create_time', 'time', 3, 'function'),
    );
}