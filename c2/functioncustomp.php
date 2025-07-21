<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function add($a,$b){
        return $a+$b;
    }
    function sub($a,$b){
        return $a-$b;
    }
    function mul($a,$b){
        return $a*$b;
    }
    function div($a,$b){
        return $a/$b;
    }

    echo "5+8=".add(5,8)."<br>";
    echo "5-8=".sub(5,8)."<br>";
    echo "5*8=".mul(5,8)."<br>";
    echo "5/8=".div(5,8)."<br>";
    
    

    ?>
    
</body>
</html>