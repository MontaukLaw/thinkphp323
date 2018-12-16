<?php
return array(
    //'配置项'=>'配置值'
    'URL_ROUTE_RULES' => array(
        'posts/:year/:month/:day' => 'Index/getRouteParam',
        'posts/:id' => 'Index/index',
        'posts/read/:id' => '/posts/:1'),
);