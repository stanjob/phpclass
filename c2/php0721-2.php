<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if($_POST['sex']==='male'){
    echo '<img src="../images/man.png" alt="Male Image" width="100px">'."<br>";
}else{
    echo '<img src="../images/woman.png" alt="Male Image" width="100px">'."<br>";
}

echo "姓名：".$_POST['name']."<br>";
echo "生日：".$_POST['year']."年".$_POST['month']."月".$_POST['day']."日"."<br>";

echo "興趣：";
foreach($_POST['hobby'] as $val){
    echo "<br>".$val;
}



?>
    
</body>
</html>