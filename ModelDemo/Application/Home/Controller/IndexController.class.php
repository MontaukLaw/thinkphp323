<?php

namespace Home\Controller;

use Think\Controller;
use Home\Common\JsonMsg;
use Think\Model;


class IndexController extends Controller
{
    public function index()
    {
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>', 'utf-8');
    }

    public function getUser()
    {
        $userM = D('User');
        $data = $userM->query('SELECT * FROM think_user');
        $this->ajaxReturn($data);
    }

    public function getUserByID()
    {
        $uid = (int)(I('post.userid'));
        // $this->ajaxReturn($uid);
        if ($uid == 0) {
            //检测输入, 我感觉应该写成before
            $jsonMsg = new JsonMsg();
            $jsonMsg->success = false;
            $jsonMsg->msg = 'PARAM ERROR';
            $this->ajaxReturn($jsonMsg);
        }
        $userM = D('User');
        //$this->ajaxReturn($uid);
        $data = $userM->where('id=' . $uid)->select();
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