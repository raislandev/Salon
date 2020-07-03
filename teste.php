<?php
use PHPUnit\Framework\TestCase;

class MyTeste extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);
    }
}