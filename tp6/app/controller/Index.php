<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return view();
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
    public function hello1($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
    public function hello3($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
    public function hello4($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
