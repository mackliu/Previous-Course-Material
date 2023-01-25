<?php 

include_once "base.php";
include_once "save.php";

$table="invoice";

$row=find($table,14);

/* echo "<pre>";
print_r($row);
echo "</pre>"; */

$row['code']="XX";
save($table,$row);

$row=find($table,['code'=>'AA','year'=>'2021']);

/* echo "<pre>";
print_r($row);
echo "</pre>"; */


$row['code']="CB";
$row['number']="12332122";

/* echo "<pre>";
print_r($row);
echo "</pre>"; */



function find($table,$arg){
    global $pdo;

    $sql="select * from $table ";

    if(is_array($arg)){
        $tmp=[];
        foreach($arg as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql." where " . implode(" && ",$tmp);
    }else{
        $sql=$sql." where `id`='$arg'";
    }

    //echo $sql;

    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

?>