<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/19
 * Time: 9:39
 */

namespace Home\Controller;
use Home\Common\JsonMsg;
use Think\Controller;

class UtilController extends Controller
{

    public function jsonOut($data)
    {
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