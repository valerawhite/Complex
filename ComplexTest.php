<?php

use PHPUnit\Framework\TestCase;
require 'Complex.php';

class ComplexTest extends TestCase
{
    public function testgetSumm()
    {
        $obj = new Complex('2i','4','6i','8');
        $result = $obj->getSumm();
        $this->AssertEquals('12+8i', $result);
    }


    public function testgetMinus()
    {
        $obj = new Complex('2i','4','6i','8');
        $result = $obj->getMinus();
        $this->AssertEquals('-4+-4i', $result);
    }


    public function testgetComposition()
    {
        $obj = new Complex('2i','4','6i','8');
        $result = $obj->getComposition();
        $this->AssertEquals('20+40i', $result);
    }


    public function testgetDivision()
    {
        $obj = new Complex('2i','4','6i','8');
        $result = $obj->getDivision();
        $this->AssertEquals('0.44+-0.08i', $result);
    }
}