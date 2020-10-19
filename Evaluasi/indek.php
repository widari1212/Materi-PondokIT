<?php
function selectionValue(string $collectionValue):int {
    $pemisah = [0];
    $to_array = str_split($collectionValue); 
    var_dump($to_array);
    $filter = array_diff($to_array, $pemisah); 
    var_dump($filter);
    $separate = array_chunk($filter, 6); 
    
    $conv = function () use ($separate) {
        asort($separate[0]); 
        asort($separate[1]);
        asort($separate[2]);
        echo implode($separate[0]); 
        echo implode($separate[1]);
        echo implode($separate[2]);
    };
    
    return intval($conv()); 
}

selectionValue(5956560159466056);
    ?>
    
