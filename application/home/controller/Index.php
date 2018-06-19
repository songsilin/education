<?php

namespace app\home\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch('index');
//        return $this->fetch('index',[],['__HOME__'=>'127.0.0.1/static/home']);
    }
    public function about()
    {
        return $this->fetch('about');
    }
    public function gallery()
    {
        return $this->fetch('gallery');
    }
    public function contact()
    {
        return $this->fetch('contact');
    }
}
