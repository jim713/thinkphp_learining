<?php
namespace app\index\controller;

// $config = require __DIR__ . '/cinfig.php';

class Index
{
    public function index()
    {
        return $this->fetch('index');
    }
}
