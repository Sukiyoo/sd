<?php
/**
 * Created by PhpStorm.
 * User: zhangjincheng
 * Date: 16-7-15
 * Time: 下午4:49
 */
$config['mysql']['enable'] = true;
$config['mysql']['active'] = 'test';
$config['mysql']['test']['host'] = '127.0.0.1';
$config['mysql']['test']['port'] = '3306';
$config['mysql']['test']['user'] = 'root';
$config['mysql']['test']['password'] = 'Sunsheng0905!';
$config['mysql']['test']['database'] = 'sd';
$config['mysql']['test']['charset'] = 'utf8mb4';
$config['mysql']['asyn_max_count'] = 10;
return $config;
