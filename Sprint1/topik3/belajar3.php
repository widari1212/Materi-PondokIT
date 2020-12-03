<?php
for ($i=1;$i<=10; $i++){
for ($j = 1;$j<=10; $j++){
    if ($i<1||$j%2){
        echo "*";
    }else{
        echo "-";
    }
    

}
    echo PHP_EOL;
}