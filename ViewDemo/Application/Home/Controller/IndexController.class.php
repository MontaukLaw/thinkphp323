<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function indexbackup()
    {
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>', 'utf-8');
    }

    public function index2()
    {
        $val = 'name';
        $array1 = ['name' => 'admin'];
        $array2 = [['name' => 'admin'], ['name' => 'admin2']];

        $obj = new \stdClass();
        $obj->name = 'admin';

        $this->assign('val', $val);
        $this->assign('array1', $array1);
        $this->assign('array2', $array2);
        $this->assign('obj', $obj);
        $this->display();

    }

    public function index()
    {
        $obj1 = new \stdClass();
        $obj2 = new \stdClass();
        $author1 = new \stdClass();
        $author2 = new \stdClass();

        $author1->user_name = 'thinkphp';
        $author1->user_nickname = '流年';

        $author2->user_name = 'thinkphp';
        $author2->user_nickname = '流年';

        $obj1->article_id = '1';
        $obj1->article_title = '今天老百姓真呀真高兴';
        $obj1->article_content = '呼儿孩孩哟';
        $obj1->article_create_time = '2018-12-17 15:48:41';
        $obj1->author = $author1;

        $obj2->article_id = '2';
        $obj2->article_title = '今天老百姓真呀真高兴2';
        $obj2->article_content = '呼儿孩孩哟2';
        $obj2->article_create_time = '2018-12-17 15:48:22';
        $obj2->author = $author2;
        $objArray = array($obj1, $obj2);

        $projects = array(
            array(
                'name' => 'PHP',
                'members' => array(
                    array(
                        'id' => 1,
                        'name' => 'Jim'
                    ),
                    array(
                        'id' => 2,
                        'name' => 'Tom'
                    )
                )
            ),
            array(
                'name' => 'Java',
                'members' => array(
                    array(
                        'id' => 3,
                        'name' => 'White'
                    ),
                    array(
                        'id' => 4,
                        'name' => 'Black'
                    )
                )

            )

        );

        //$this->ajaxReturn($objArray);
        $obj = new \stdClass();
        $obj->name = 'admin';
        $this->assign('obj', $obj);
        $this->assign('posts', $objArray);
        $this->assign('projects', $projects);
        $this->display();
    }
}