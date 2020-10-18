<?php
echo "inputkan data : ";

$banyakdata = fgets(STDIN);

for ($i=0;$i<$banyakdata;$i++){
    echo "input data : ";
    $data = fgets(STDIN);
    $array[]=$data;
}
$sum = array_sum($array);
$count = count($array);
echo $sum / $count;
?>

