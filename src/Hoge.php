<?php
namespace myapp;

class Hoge
{
    protected $fuga;

    public function __construct(Fuga $fuga)
    {
        $this->fuga = $fuga;
    }

    public function hello(): string
    {
        echo "HOGE\n";
        $ret = $this->fuga->hello();

        return "HOGE".$ret;
    }
}