<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
	echo "你的名字是:".$_POST['yourname'].",你的性別是:".$_POST['sex']."<br>";
	echo "你的信箱是:".$_POST['email'].",你設的密碼是:".$_POST['password']."<br>";
	echo $_REQUEST['yourname'];
	
	?>
</body>
</html>