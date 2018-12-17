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

    public function getSpecifyField()
    {
        return $this->field('id,nickname');
    }
}