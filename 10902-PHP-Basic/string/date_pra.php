<h3>計算下一次生日的間隔天數</h3>
生日=10-07
<?php

$birthday="2021-10-07";
$today=date("Y-m-d");
echo "<br>";
echo floor((strtotime($today)-strtotime($birthday))/(60*60*24));
echo "<br>";
echo floor(abs(strtotime($today)-strtotime($birthday))/(60*60*24));

if(strtotime($today)>strtotime($birthday)){
    $gap=strtotime($today)-strtotime($birthday);
}else{
    $gap=strtotime($birthday)-strtotime($today);
}

    echo "<br>".$gap/86400;

?>