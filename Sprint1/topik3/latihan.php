<?php

for($t=0; $t<10; $t++){
    for ($r=0; $r<10; $r++){
        if($r>=10-$t&& $t>=10||$r==10-$t){
            echo " - ";
        }else
        echo " * ";
    }

   echo PHP_EOL;
}
// for ($a=1;$a<=10;$a++){
//     for ($d=1;$d<=10;$d++){
//         if ($a%5){
//             echo " * ";
//         }else{
//             echo " - ";
//         }
//     }
//     echo PHP_EOL;
// }