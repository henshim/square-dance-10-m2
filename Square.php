<?php


class Square
{
    public function __construct()
    {
    }

    function pairing($list1, $list2)
    {
        $pair = array();
        if (count($list1) !== 0 && count($list2) !== 0) {
            $man = $list1->shift();
            $woman = $list2->shift();
            array_push($pair, $man->name);
            array_push($pair, $woman->name);
        } else {
            array_push($pair, '1 trong 2 danh sách chưa có người');
        }
        return $pair;
    }

    function wait($list1, $list2)
    {
        $number = count($list1) - count($list2);
        return 'Wait pairing ' . abs($number);
    }

}
/*$in=new Square();
print_r($in);*/