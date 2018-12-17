<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/17
 * Time: 15:26
 */

namespace Home\Model;

use Think\Model\RelationModel;

class ArticleModel extends RelationModel
{
    public $_link = array(
        'author' => array(
            'mapping_type' => self::BELONGS_TO,
            'class_name' => 'User',
            'foreign_key' => 'author_id',
            'mapping_fields' => 'user_name,user_nickname,user_id'
        ),
    );

}