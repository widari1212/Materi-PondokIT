<?php
echo "inputkan data : ";

$banyakdata = fgets(STDIN);

for ($i=0; $i < $banyakdata; $i++){
    echo "input data : ";
    $data = fgets(STDIN);
    $array[]=$data;
}
$v = array_count_values($array);                 
    foreach ($v as $key => $val){
        if($val==max($v)){
            echo "modus : $key dengan banyak data $val";
        }
    }  
               
?>