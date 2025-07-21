<?php

$color=array('red','blue','green','orange','pink');
$turn=rand(0,4);
$bgColor=$color[$turn];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $turn=rand(0,4);

}
    


?>
<html>
    <body>
        <form method="post">
            <button type="submit">Change Background</button>
        </form>
        
        
    </body>
</html>
<style>
body{
    background-color: <?php echo $bgColor; ?>;
}
</style>
