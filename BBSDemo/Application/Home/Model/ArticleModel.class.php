<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/20
 * Time: 20:51
 */

namespace Home\Model;

use Think\Model;

class ArticleModel extends Model
{
    protected $_auto = array(
        array('article_create_time', 'time', 3, 'function'),
    );
}