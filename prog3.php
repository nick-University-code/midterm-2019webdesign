<html>
    <head>
        <title>Midterm Test PART2 question3</title>
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
            <form action="prog3.php" method="post" style="font-size:16px; line-height:150%;">
             數字:<tr>   <input type="text" name="number">
                <input type="submit" value="送出"  name="check" >
            </form>
      </font></h2>
      

      
  


<?php

if(isset($_POST['check'])=="送出"){
$number=$_POST['number'];
$ans=1;
for($i=1;$i<=$number;$i++){
    $ans*=$i;
}
}
?>


       
        <h3 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="5" >
            <?php
              if(isset($_POST['check'])=="送出"){        
                    if($number>10||$number<3){
                    echo "<script>alert('超出允許範圍，請輸入3~10')</script>";
                    }
                    else{
                        echo $number."!".'='.$ans.'<br>';
               }
              }
            ?>
      </font></h3>
      
       <br><br>
      
       </div>
    </body>
</html>