<?php
//array要想像成函示,所以在PHP宣告用小括號
$stu=array(98,68,80,70,88);
print_r($stu);
echo "<br>";

$stu1=array("chen"=>98,"lin"=>68,"cheng"=>80,"wang"=>70,"lee"=>88);
print_r($stu1);

echo "<br>";
echo $stu1["lin"]."<br>";
echo $stu[4]."<br>";

echo "<br>";
echo "<br>";
$sum=0;
foreach($stu as $value){
    $sum+=$value;
    echo $value."<br>";
    
};
echo "<br>";
echo "avg=".$sum/5;
echo "<br>";
echo "<br>";
foreach($stu as $key=>$value){
    echo "index=".$key." value=".$value."<br>";
}

//設計一個網頁,可在每次執行(或F5)背景顏色可以由下列陣列隨機產生。$color裡面存"red","blue","green","orange","pink".


?>