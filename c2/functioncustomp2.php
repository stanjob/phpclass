<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 設計一個網頁小計算機 -->
     <form action="./functioncustomp2.php" name="form1"  method="post">

        <label for="num1">num1:</label>
        <input type="text" name="num1">
        <br>
        <br>
        <label for="num2">num2:</label>
        <input type="text" name="num2">
        <br>
        <br>
        <label for="caculate">運算：</label>
        <input type="radio" name="math" value="add">
        <label for="add">加</label>
        <input type="radio" name="math" value="sub">
        <label for="sub">減</label>
        <input type="radio" name="math" value="mul">
        <label for="mul">乘</label>
        <input type="radio" name="math" value="div">
        <label for="div">除</label>
        <br>
        <br>
        <input type="submit" value="submit" name="submit" id="submit">

    </form>

    <hr>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    


    $a=$_POST['num1'] ?? '';
    $b=$_POST['num2'] ?? '';

    $mathway=$_POST['math'];


    function add($a,$b){
        echo "$a + $b =".($a+$b);
    }
    function sub($a,$b){
        echo "$a - $b =".($a-$b);
    }
    function mul($a,$b){
        echo "$a * $b =".($a*$b);
    }
    function div($a,$b){
        echo "$a / $b =".($a/$b);
    }

    if($mathway==='add'){
        return add($a,$b);
    }else if($mathway==='sub'){
        return sub($a,$b);

    }else if($mathway==='mul'){
        return mul($a,$b);
    }else{
        return div($a,$b);
    }

    }

    ?>
    
</body>
</html>