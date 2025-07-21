<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./php0721-2.php" id="form1" method="post">
        <label for="name">姓名：</label>
        <input type="text" name="name">
        <br>

        <label for="sex">性別：</label>
        <input type="radio" name="sex" value="male">
        <label for="sex">男</label>
        <input type="radio" name="sex" value="female">
        <label for="sex">女</label>
        <br>
        <label for="birthday">生日：</label>
        <select name="year" id="year">
            
                <?php
                for($i=1900; $i<=date("Y");$i++){
                    echo "<option value=\"$i\" >$i</option>";
                };
                ?>
            
        </select>
        <label for="year">年</label>
        <select name="month" id="month">
            
                <?php
                for($i=1; $i<=12;$i++){
                    echo "<option value=\"$i\" >$i</option>";
                };
                ?>
            
        </select>
        <label for="month">月</label>
        <select name="day" id="day">
            
                <?php
                for($i=1; $i<=31;$i++){
                    echo "<option value=\"$i\" >$i</option>";
                };
                ?>
            
        </select>
        <label for="day">日</label>
        <br>
        <label for="hobby">興趣：</label>
        <input type="checkbox" name="hobby[]" value="ball">
        <label for="ball">打球</label>
        <input type="checkbox" name="hobby[]" value="music">
        <label for="music">聽音樂</label>
        <input type="checkbox" name="hobby[]" value="reading">
        <label for="reading">閱讀</label>
        <input type="checkbox" name="hobby[]" value="hiking">
        <label for="hiking">爬山</label>
        <br>
        <br>
        <input type="submit" name="submit" id="submit" value="送出" >



    </form>
    
    
</body>
</html>