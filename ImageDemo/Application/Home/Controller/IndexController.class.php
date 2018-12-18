<?php

namespace Home\Controller;

use Think\Controller;
use Think\Image;

class IndexController extends Controller
{
    public function index()
    {
        $this->display();
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>', 'utf-8');
    }

    public function imageHandle()
    {
        $path = './Public/images/bookplate.jpg';
        $image = new Image(Image::IMAGE_GD, $path);
        dump($image);
    }

    public function thumb()
    {
        $path = './Public/images/bookplate.jpg';
        $image = new Image(Image::IMAGE_GD, $path);
        //等比例缩小
        $image->thumb(200, 200)->save('./Public/images/bookplate_200x200.jpg');
    }

    public function waterPrint()
    {
        $path = './Public/images/bookplate.jpg';
        $logopath = './Public/images/logo.png';
        $image = new Image(Image::IMAGE_GD, $path);

        //水印
        $image->water($logopath, $locate = Image::IMAGE_WATER_SOUTHWEST, $alpha = 50)
            ->save('./Public/images/bookplate_with_logo.jpg');
    }


}