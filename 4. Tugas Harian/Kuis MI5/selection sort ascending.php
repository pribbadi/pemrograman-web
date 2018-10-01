<?php
$a = array(1,0,9,5,3,3,4,2,3,2,0,6);
echo "Data sebelum diurutkan : ";
foreach ($a as $value) {
    echo $value;
}
$n = count($a);
for ($i = 0; $i < $n - 1; $i++) {
    $low_key = $i;
    $low_val = $a[$i];
    for ($j = $i + 1; $j < $n; $j++) {
        if ($a[$j] < $low_val) {
            $low_key = $j;
            $low_val = $a[$j];
        }
    }
    $tmp = $a[$i];
    $a[$i] = $a[$low_key];
    $a[$low_key] = $tmp;
}
echo "<br>Data setelah diurutkan : ";
foreach ($a as $value) {
    echo $value;
}
?>