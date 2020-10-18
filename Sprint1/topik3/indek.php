<?php
for ($x=0;$x<=8;$x++){
    for($r=0;$r<=8;$r++){
        if ($x==4||$r==4){
        echo "";
    }else
        echo "-";

    }
    echo PHP_EOL;
}

