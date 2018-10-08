

<?php 
$arr = array(7, 3, 9); //data : array
$sortedArr = bubbleSort($arr);
var_dump($sortedArr);
function bubbleSort(array $arr) {
    $sorted = false;
    while ($sorted === false) {
        $sorted = true;
        for ($i = 0; $i < count($arr)-1; ++$i) {
            $current = $arr[$i];
            $next = $arr[$i+1];
            if ($next < $current) {
                $arr[$i] = $next;
                $arr[$i+1] = $current;
                $sorted = false;
            }
        }
    }
    return $arr;
}