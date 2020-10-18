<?php
echo "inputkan data : ";

$banyakdata = fgets(STDIN);

for ($i=0;$i<$banyakdata;$i++){
    echo "input data : ";
    $data = fgets(STDIN);
    $array[]=$data;
    $max = max ($array);
    $min = min ($array);
}

// $sum = array_sum($array);
// $count = count($array);
echo "nilai max : ".$max;
echo "nilai min : ".$min;

    
    

 
 

?>