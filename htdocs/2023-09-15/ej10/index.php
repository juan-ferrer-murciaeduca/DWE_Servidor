<?php
$a=[2,1,2,123,12];

$a[]=5;
sort($a);

// print_r($a);

// echo count($a);

for($i=0;$i<count($a);$i++){
    echo $a[$i]." ,";
}

echo "<hr>";

foreach($a as $value){
    echo $value." ,";
}

?>