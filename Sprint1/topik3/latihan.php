<?php

// for($t=0; $t<9; $t++){
//     for ($r=0; $r<9; $r++){
//         if($r==$t||$r==8-$t){
//             echo "*";
//         }else
//         echo " -";
//     }

//    echo PHP_EOL;
// }
for ($a=1;$a<=10;$a++){
    for ($d=1;$d<=10;$d++){
        if ($a%2){
            echo " * ";
        }else{
            echo " - ";
        }
    }
    echo PHP_EOL;
}