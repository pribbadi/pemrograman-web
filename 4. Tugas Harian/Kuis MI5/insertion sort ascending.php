<?php
$a = array(1,0,9,5,3,3,4,2,3,2,0,6);
echo "Data sebelum diurutkan : ";
foreach ($a as $value) {
    echo $value;
}
$n = count($a);
for ($i = 1; $i < $n; $i++) {
    $j = $i;
    while ($j >= 1 and $a[$j - 1] > $a[$j]) {
        $tmp = $a[$j];
        $a[$j] = $a[$j - 1];
        $a[$j - 1] = $tmp;
        $j--;
    }
}
echo "<br>Data setelah diurutkan : ";
foreach ($a as $value) {
    echo $value;
}
?>