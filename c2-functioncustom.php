<?php
function hello($name){
    echo "歡迎您~$name";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php hello('小白'); ?>
    <?php

    $number=10;
    function test(&$num){
        return $num+=1;
    };

    test($number);
    echo "address \$number=".$number;
    echo "<br>";

    test($number);
    echo "address \$number=".$number;
    echo "<br>";

    ?>
    
</body>
</html>