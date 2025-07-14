<?php session_start(); ?>
<?php

echo $_SERVER['REMOTE_ADDR']."<br>";
$var='';
// 如果是$var=null;則沒有被設任何值

if(isset($var)){
    echo "this var is set so I will print.<br>";
}


// 請使用SESSION完成以下功能,設計網頁可技術使用者造訪網頁的次數 output:歡迎你第一次造訪,重整之後output:歡迎你第二次造訪


if(!isset($_SESSION['visit'])){
   
    $_SESSION['visit']=1;
    echo "歡迎您第1次造訪";

}else{
    $_SESSION['visit']+=1;
    echo "歡迎您第".$_SESSION['visit']."造訪<br>";
}


// 老師版本的解答

if(!isset($_SESSION['cnt'])){
    $_SESSION['cnt']=1;
}else{
    $_SESSION['cnt']++;
}

echo "歡迎您第{$_SESSION['cnt']}次造訪"; 



?>
