<?php 
//nim 109533423206 ==> 423206
//data yang masuk array = 6 digit terakhir
$a = array(0,2,2,1,4,1); //6 digit terakhir dari nim
$c=count($a);
$b = false;
while ($b === false) {
    $b = true;
    for ($i = 0; $i < $c-1; ++$i) {
        $x = $a[$i];
        $y = $a[$i+1];
        if ($y < $x) {
            $a[$i] = $y;
            $a[$i+1] = $x;
            $b = false;
        }
    }
}
foreach ($a as $value) {
    echo $value;
}
$list=$a;
$val = $list[5]; //isi $val adalah 1) jika nim genap = $list[0] dan 2) jika nim ganjil = $list[5]
$low = 0;
$high = $c - 1;
while ($low <= $high) {
    $mid = floor(($low + $high) / 2);
    if ($list[$mid] == $val) {
        echo "<br>Data $val ditemukan di : $ a[$mid] pada array setelah pengurutan";
        break;
    } else if ($list[$mid] > $val) {
        $high = $mid - 1;
    } else if ($list[$mid] < $val) {
        $low = $mid + 1;
    }
}