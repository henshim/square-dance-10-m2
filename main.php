<?php
include 'Dancer.php';
include 'Square.php';

$manlist = new SplQueue();
$womanList = new SplQueue();
$couple = new Square();

$man1 = new Dancer('Super Man', 'male');
$man2 = new Dancer('Ant-man', 'male');
$man3 = new Dancer('Falcon', 'male');

$manlist->push($man1);
$manlist->push($man2);
$manlist->push($man3);


$woman1 = new Dancer('Wonder Woman', 'female');
$woman2 = new Dancer('Black Widow', 'female');
$woman3 = new Dancer('Batgirl', 'female');
$woman4 = new Dancer('Gamora', 'female');

$womanList->push($woman1);
$womanList->push($woman2);
$womanList->push($woman3);
$womanList->push($woman4);

echo "<pre>";

print_r($manlist);
print_r($womanList);

print_r($couple->pairing($manlist, $womanList))
print_r($couple->pairing($manlist, $womanList))
print_r($couple->pairing($manlist, $womanList))
print_r($couple->pairing($manlist, $womanList))
print_r($couple->wait($manlist, $womanList))
