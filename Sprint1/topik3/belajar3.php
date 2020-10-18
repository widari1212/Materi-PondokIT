<?php
for ($i=1;$i<=10; $i++){
for ($j = 1;$j<=10; $j++){
    if ($j==5||$i==5||$j==$i||$j==5||$i==10-$j){
        echo "*";
    }else{
        echo "-";
    }
    

}
    echo PHP_EOL;
}