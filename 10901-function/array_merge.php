<?php

$a=["AA","BB"];
$b=["CC","DD"];
$d=["XX","YY","ZZ"];
$c=array_merge($b,$a,$d);

echo "<pre>";
print_r($c);
echo "</pre>";
echo "自己寫的函式<br>";

$test=["劉","勤","永"];
$my=am($d,$b,$a,$test);
echo "<pre>";
print_r($my);
echo "</pre>";

function am($a,...$b){
    if(is_array($a)){
        $array=$a;
    }else{
        echo "not an array";
    }
    
    foreach($b as $item){

        foreach($item as $i){
            $array[]=$i;
        }
    }

    return $array;
}

?>