	<?php
    
    //++ || && and --
	//the following number will be different becasue the ++ increase the variable after compile.
	$increase=5;
	echo $increase++;
	echo $increase."<br>";

    //if statement, if else, elseif else

    $age=80;
    if($age>=18 && $age<65){
        echo "you are adult"."<br>";
    }else if($age<18){
        echo "you are still child"."<br>";
    }else{
        echo "you are elder, Sir!"."<br>";
    }

    $number=121;
    if($number%2){
        echo "This is an odd!"."<br>";
    }else{
        echo "This is an even!"."<br>";
    }

    $day=date("w");

    
    if($day==1){
        echo "今天星期一，猴子穿新衣";
    }elseif($day==2){
        echo "今天星期二，猴子肚子餓";
    }elseif($day==3){
        echo "今天星期三，猴子去爬山";
    }elseif($day==4){
        echo "今天星期四，猴子去考試";
    }elseif($day==5){
        echo "今天星期五，猴子去跳舞";
    }elseif($day==6){
        echo "今天星期六，猴子去斗六";
    }elseif($day==0){
        echo "今天星期七，猴子森七七";
    }else{
        echo "Something Wrong";
    }
    echo "<br>";

    //use switch case break default to make a statement
    $beverage=5;
    
    

    switch($beverage){
        case 1:
            echo "你選擇的是咖啡。"."<br>";
            echo "小心燙口，但精神滿滿!";
            break;
        case 2:
            echo "你選擇的是綠茶。"."<br>";
            echo "綠意盎然，但健康首選!";
            break;
        case 3:
            echo "你選擇的是可樂。"."<br>";
            echo "氣泡吱吱,快樂無敵！";
            break;
        case 4:
            echo "你選擇的是柳橙汁。"."<br>";
            echo "維他命C補給，酸甜好滋味！";
            break;
        case 5:
            echo "你選擇的是驚喜特調。"."<br>";
            echo "你勇氣可嘉。祝你好運！"."<br>";
            break;
        default:
            echo "重選!";
    };

    for($i=1;$i<=10;$i++){
        echo $i."<br>";
    };

    for($i=2;$i<=4;$i++){
        echo "2*$i=". 2*$i."<br>";
    }

    // 請找出1-200之間可以被7以及9整除的數?
    echo "The number can be divided to 0 by 7 and 9<br>";

    for($i=1;$i<=200;$i++){
        if($i%7===0 && $i%9===0){
            echo $i."<br>";
        }
    }

    //while loop前測試迴圈

    $a=6;
    while($a<10){
        $a++;
        echo '$a<10';
    }
    echo "<br>";
    //do while 後測試迴圈,怎樣都會先跑一次
    $a=6;
    do{
        echo '$a<10';
        $a++;   
    }while($a>10);
    //設計抽彩票程式,玩家可以抽出0-10不等的金額,直到抽中0元就不能再抽
    // output:抽中5元累計5元,抽中3元累計8元

    echo "<br><br>";

    // $price=null;
    // $acumulate=0;

    // while($price!==0){
    //     $price=rand(0,10);
    //     $acumulate+=$price;
    //     echo "抽中$price"."元,"."累計$acumulate"."元<br>";

    // };

    //老師解答版本1
    $sum=0;
    do{
        $lottery=rand(0,10);
        $sum+=$lottery;
        echo "抽中".$lottery."元,累計".$sum."元<br>";
    }while($lottery!=0);
    //老師解答版本2
    $lottery=rand(0,10);
    while(true){
        $lttery=rand(0,10);
        echo "抽中".$lottery."元<br>";
        if($lottory==0)
            break;
    }



    
    ?>

    

