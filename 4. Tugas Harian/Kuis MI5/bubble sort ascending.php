<?php
$a = array(1,0,9,5,3,3,4,2,3,2,0,6);
echo "Data sebelum diurutkan : ";
foreach ($a as $value) {
    echo $value;
}
$b = false;
$c=count($a);
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
echo "<br>Data setelah diurutkan : ";
foreach ($a as $value) {
    echo $value;
}