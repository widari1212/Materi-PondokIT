<?php
$n=9;
for ($n=9 ; $n !=0 ; $n--) {
    if (!($n % 2)){
        continue;
    }if ($n == 9){
        continue;
    }else{
        echo $n." ";
    }
}
?>