<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>firstphp</title>
</head>
<body>
    <?php
    echo "welcome to my first php page! <br>";
	echo "welcome to my first php page!","test1","test2<br>";
	
	
	//print can only print one variable
	print "welcome to my first php page! by print";
		
	echo 'Hello','world'; //can use multiple variable
	echo "<br>";
	print 'hello'; //only one variable, if there is more, there will be error
	echo "<br>";
	echo print "printout and input";
	echo "<br>";
	//output
	echo "Hello world!";
	echo"<br>";
	print "Hello World!<br><br>";
	
	$price=1000;
	$taxRate=0.05;
	$taxAmount=$price*$taxRate;
	$totalPrice=$price+$taxAmount;
	echo "The tax total= $totalPrice <br>";
	
	
	//variable scope and \
	$number1=20;
	echo "\$number1=".$number1."<br>";
	echo "\$number1=$number1<br>";
	echo '\$number1=$number1<br>';
	echo "\$number1=$number1<br>";
	
	echo "<hr>";
	
	$number=30;
	function local(){
		global $number;
		echo "\$number=$number";
		echo "<br>";
		
	}
	local();
	echo "\$number=$number";
	
	echo "<hr>";
	
	$GLOBALS['a']=5;
	function local2(){
		echo "\$number=".$GLOBALS['a'];
		echo "<br>";
	}
	local2();
	echo "\$number=".$GLOBALS['a']."<br>";
	//""之間的陣列單引號要消去
	echo "\$number=$GLOBALS[a]"."<br>";
	
	echo "I have done with git<br>";
	
	//static variable
	
	
	//use . to link different variable and string
	$name="金城武";
	$price=400;
	$goods="衣服";
	
	echo "$name"."花了$price,"."買了一件$goods<br>";
	echo $name."花了".$price.",買了一件".$goods."<br>";
	
	echo password_hash('mypassword123', PASSWORD_DEFAULT)."<br>";

	//跳脫字元
	$a="\"hi\"";
	echo $a."<br>";

	//format sprintf
	$fomat=sprintf("%s花了%d買了一件%s<br>",$name,$price,$goods);
	echo $fomat;


	
	
	
	
	
	
	
    ?>
	
	

    
    
    
</body>
</html>