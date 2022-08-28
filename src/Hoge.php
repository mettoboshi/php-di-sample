<?php
namespace myapp;

class Hoge
{
    protected $fuga;

    public function __construct(Fuga $fuga)
    {
        $this->fuga = $fuga;
    }

    public function hello()
    {
        echo "HOGE\n";
        $this->fuga->hello();
    }
}