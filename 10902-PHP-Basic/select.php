<H1>程式練習</H1>
<h3>if ... else 判斷式</h3>
<hr>
<h5>成績及格判斷</h5>
<?php

$score=39;

echo "成績:".$score;
echo "<br>判斷結果:";

if($score>=60){
    echo "及格";
}else{
    echo "不及格";
}

?>
<h5>成績等級判斷</h5>
<h5>寫法一</h5>
<pre>
if($score >=0 && $score<=100){

    if($score>=90 && $score<=100){
        echo "A";
    }else{

        if($score>=75 && $score<90){
            echo "B";
        }else{

            if($score>=60 && $score <75 ){
                echo "C";
            }else{
                echo "D";
            }

        }
    }


}else{
    echo "&lt;span style='color:red'&gt;成績必須在0~100分之內&lt;/span&gt;";
}
</pre>
<h5>寫法二</h5>
<pre>

if($score >=0 && $score<=100){

    if($score>=90 && $score<=100){
        echo "A";
    }else if($score>=75 && $score<90){
        echo "B";
    }else if($score>=60 && $score <75){
        echo "C";
    }else{
        echo "D";
    }

}else{
    echo "&lt;span style='color:red'&gt;成績必須在0~100分之內&lt;/span&gt;";
}
</pre>
<h5>寫法三</h5>
<pre>
if($score <0 || $score>100){
    echo "&lt;span style='color:red'&gt;成績必須在0~100分之內&lt;/span&gt;";
}else if($score>=90){
    echo "A";
}else if($score>=75){
    echo "B";
}else if($score>=60){
    echo "C";
}else{
    echo "D";
}
</pre>
<?php

$score=185;
echo "成績:".$score;
echo "<br>";
echo "等級:";
if($score <0 || $score>100){
    echo "<span style='color:red'>成績必須在0~100分之內</span>";
}else if($score>=90){
    echo "A";
}else if($score>=75){
    echo "B";
}else if($score>=60){
    echo "C";
}else{
    echo "D";
}



?>

<h5>閠年判斷</h5>
<?php
$year=3600;

echo "年份:".$year;
echo "<br>";
echo "是否為閏年:";

if($year%4 == 0 && ($year%100 != 0  || ($year%400==0 && $year % 3200 !=0))){

    echo "閏年";
    
}else{
    echo "不是";
}

?>
<pre>

if($year%4 == 0){

if($year%100 != 0){

    echo "閏年";
}else{

    if($year%400==0){

        if($year % 3200 ==0){
            echo "不是";
        }else{

            echo "閏年";
        }

    }else{

        echo "不是";
    }
}
}else{
echo "不是";
}

</pre>

<h3>switch ... case 選擇</h3>
<hr>
<pre>
switch(case){
    case "":

    break;
    case "":

    break;
    default:
}


</pre>
<?php

$score=40;
$level="";
if($score <0 || $score>100){
    echo "<span style='color:red'>成績必須在0~100分之內</span>";
}else if($score>=90){
    $level= "A";
}else if($score>=75){
    $level= "B";
}else if($score>=60){
    $level= "C";
}else{
    $level= "D";
}

echo "成績:".$score;
echo "<br>";
echo "等級:".$level;
echo "<br>";
switch($level){
 case "A":
    echo "評價:非常好，請努力保持";
 break;
 case "B":
    echo "評價:可圈可點，但還有進步的空間";
 break;
 case "C":
    echo "評價:一般水平，需要更多的努力";
 break;
 case "D":
    echo "評價:用心不足，請加強";
 break;
 default:
 echo "資料錯誤";
}

?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>