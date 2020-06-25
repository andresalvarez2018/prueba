<?php

$array = Array(20,11,11,15,15,60,65,7,7,7);
$contar_array=count($array);
$list = Array();


for ($i=0; $i < $contar_array; $i++) { 
    $count=0;
    for ($q=0; $q < $contar_array; $q++) { 
        
        if ($array[$i] == $array[$q]) {
            $count++; 
            array_push($list,$array[$i]);            
        }
    }
    if ($list[$i] != 0) {
        echo $array[$i]." se repite: " . $count;
        echo "<br>";
    }

}


?>