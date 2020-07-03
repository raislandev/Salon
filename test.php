<?php
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);
    }
}