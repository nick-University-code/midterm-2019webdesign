<?php 
session_start();
function distance($x, $y){
    return (sqrt($x*$x*$x+$y*$y*$y));
}

function IsInside($x, $y){
    $Inside=FALSE;
    if(distance($x,$y)<=1)$Inside=TRUE;
    return $Inside;
}
if(!isset($_SESSION['InCount']))$_SESSION['InCount']=0;
if(!isset($_SESSION['LCount']))$_SESSION['LCount']=0;
$InsideCount=0;
$LoopCount = 10000;
for($i=0;$i<$LoopCount;$i++){
    $x=  mt_rand(0, 1000000)/1000000;
    $y=  mt_rand(0, 1000000)/1000000;
    if(IsInside($x, $y))$InsideCount++;
}
$InsideCount += $_SESSION['InCount'];
$LoopCount += $_SESSION['LCount'];
$_SESSION['InCount'] = $InsideCount;
$_SESSION['LCount'] = $LoopCount;
$Area =$InsideCount /$LoopCount;
$PI =$Area *4;
?>
<html>
    <head>
        <title>Midterm Test PART2 question2</title>
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="Refresh" name="viewport" content="5">
    </head>
    <body>
      <div style="color:white; background-color:#8DAA9D;height:100%;padding:50px;">
               <a align="left">     <input type ="button" onclick="javascript:location.href='https://p9056.isrcttu.net/midterm/index.php'" value="回題目選單">   </a>
            <h1 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="6" >
                 <b>Midterm Test</b></font>       
                 <br>
                 <font face="Microsoft JhengHei" color="#4A4E69" size="3" >
                 <b>UI4B35</b></font>       
               </h1>   
        <h4 align="center">
            <?php
            $s=100-$Area*100;
                echo "面積 = ".$s;
                echo "<br/>"."PI ~ ".$Area*4;
            ?>
          
      
       <br><br>
       <input type ="button" onclick="javascript:location.href='https://p9056.isrcttu.net/midterm/prog2.php'" value="刷新">
         </h4>
       </div>
    </body>
</html>