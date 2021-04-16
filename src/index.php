<?php 

namespace websmaniac\calculate;

class Index
{
    public function addNumbers($a = 0, $b = 0)
    {
        return $a+$b;
    }

    public function subNumbers($a = 0, $b = 0)
    {
        return $a-$b;
    }

    public function multiNumbers($a = 1, $b = 1)
    {
        return $a*$b;
    }

    public function divNumbers($a = 1, $b = 1)
    {
        return $a/$b;
    }

}