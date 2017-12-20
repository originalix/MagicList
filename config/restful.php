<?php

return [
    // 全局
    'PUT,PATCH /<controller:\w+>/<id:\d+>' => '/<controller>/update',
    'DELETE /<controller:\w+>/<id:\d+>' => '/<controller>/delete',
    'GET,HEAD /<controller:\w+>/<id:\d+>' => '/<controller>/view',
    'POST /<controller:\w+>' => '/<controller>/create',
    'GET,HEAD /<controller:\w+>' => '/<controller>/index',
    //模块
    'PUT,PATCH <module>/<controller:\w+>/<id:\d+>' => '<module>/<controller>/update',
    'DELETE <module>/<controller:\w+>/<id:\d+>' => '<module>/<controller>/delete',
    'GET,HEAD <module>/<controller:\w+>/<id:\d+>' => '<module>/<controller>/view',
    'POST <module>/<controller:\w+>' => '<module>/<controller>/create',
    'GET,HEAD <module>/<controller:\w+>' => '<module>/<controller>/index',
    //扩展
    '/<controller:\w+>/<action:\w+>' => '/<controller>/<action>',
    '<module>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
];
