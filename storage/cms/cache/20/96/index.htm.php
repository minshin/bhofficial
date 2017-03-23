<?php 
class Cms58d32be770da7585245407_390946490Class extends \Cms\Classes\PageCode
{
public function onTest()
{
    $this['result'] = input('value1') + input('value2');
}
public function onSelect()
{
    $this['result'] = ‘我是返回的数据’;
}
public function onDelete()
{
    $this['result'] = '我是返回的数据';
}
}
