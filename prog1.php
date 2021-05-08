<html>
    <head>
        <title>Midterm Test PART2 question1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
        A:hover {color: #9AC2C5}
        </style>
    </head>
     <body>
        <div style="color:white; background-color:#8DAA9D;height: 100%;padding:50px;">
               <a align="left">     <input type ="button" onclick="javascript:location.href='https://p9056.isrcttu.net/midterm/index.php'" value="回題目選單">   </a>
            <h1 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="6" >
                 <b>Midterm Test</b></font>       
                 <br>
                 <font face="Microsoft JhengHei" color="#4A4E69" size="3" >
                 <b>UI4B35</b></font>       
               </h1>   
        <h2 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="5" >
            <form action="https://p9056.isrcttu.net/midterm/prog1.php" method="post" style="font-size:16px; line-height:150%;">
             生日:<tr>   <input type="date" name="day">
                <input type="submit" value="送出"  name="check" >
            </form>
      </font></h2>
      

      
  


<?php

if(isset($_POST['check'])=="送出"){
$day=$_POST['day'];
$day_save= explode("-", $day);
$m=(int)$day_save[1];
$d=(int)$day_save[2];
if($m==0&&$d==0){
	$check=1;
	 echo "<script>alert('日期格式有誤，請重新選擇或輸入')</script>";
}
else{
$check=0;
}
if($m==1){
    if($d<21){
        $ans="魔羯座";
    }
    else{
        $ans="水瓶座";
    }
}
if($m==2){
    if($d<20){
        $ans="水瓶座";
    }
    else{
        $ans="雙魚座";
    }
}
if($m==3){
    if($d<21){
        $ans="雙魚座";
    }
    else{
        $ans="白羊座";
    }
}
if($m==4){
    if($d<20){
        $ans="白羊座";
    }
    else{
        $ans="金牛座";
    }
}
if($m==5){
    if($d<21){
        $ans="金牛座";
    }
    else{
        $ans="雙子座";
    }
}
if($m==6){
    if($d<22){
        $ans="雙子座";
    }
    else{
        $ans="巨蟹座";
    }
}
if($m==7){
    if($d<23){
        $ans="巨蟹座";
    }
    else{
        $ans="獅子座";
    }
}
if($m==8){
    if($d<23){
        $ans="獅子座";
    }
    else{
        $ans="處女座";
    }
}
if($m==9){
    if($d<23){
        $ans="處女座";
    }
    else{
        $ans="天秤座";
    }
}
if($m==10){
    if($d<24){
        $ans="天秤座";
    }
    else{
        $ans="天蠍座";
    }
}
if($m==11){
    if($d<22){
        $ans="天蠍座";
    }
    else{
        $ans="射手座";
    }
}
if($m==12){
    if($d<21){
        $ans="射手座";
    }
    else{
        $ans="水瓶座";
    }
}
}
?>


       
        <h3 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="5" >
            <?php
              if(isset($_POST['check'])=="送出"&&$check==0){
                echo $m."-".$d.'<br>';
                echo $ans;
               }
            ?>
      </font></h3>
      
       <br><br>
      
       </div>
    </body>
</html>