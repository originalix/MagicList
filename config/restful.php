<?php

return [
    // 全局
    'PUT,PATCH /<controller:\w+>s/<id:\d+>' => '/<controller>/update',
    'DELETE /<controller:\w+>s/<id:\d+>' => '/<controller>/delete',
    'GET,HEAD /<controller:\w+>s/<id:\d+>' => '/<controller>/view',
    'POST /<controller:\w+>s' => '/<controller>/create',
    'GET,HEAD /<controller:\w+>s' => '/<controller>/index',
    //模块
    'PUT,PATCH <module>/<controller:\w+>s/<id:\d+>' => '<module>/<controller>/update',
    'DELETE <module>/<controller:\w+>s/<id:\d+>' => '<module>/<controller>/delete',
    'GET,HEAD <module>/<controller:\w+>s/<id:\d+>' => '<module>/<controller>/view',
    'POST <module>/<controller:\w+>s' => '<module>/<controller>/create',
    'GET,HEAD <module>/<controller:\w+>s' => '<module>/<controller>/index',
    //扩展
    '/<controller:\w+>s/<action:\w+>' => '/<controller>/<action>',
    '<module>/<controller:\w+>s/<action:\w+>' => '<module>/<controller>/<action>',
];
