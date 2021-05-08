<html>
    <head>
        <title>Midterm Test PART2 question4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
        A:hover {color: #9AC2C5}
        </style>
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
   
        <h2 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="5" >
       
             <?php session_start();
           $small="qwertyuiopasdfghjklzxcvbnm";
           $big="QWERTYUIOPASDFGHJKLZXCVBNM";
           $other=",;/-";
           while(1){
               $count=0;
               $check=0;
               $check1=0;
               $check2=0;
               $ans=array();
           for($i=0;$i<8;$i++){
           $group=rand(0,2);
           if($group==0){
               $check=1;
               $choose=rand(0,25);
               $ans[$count]=substr($small,$choose,1);
               $count++;
           }
           else if($group==1){
               $check1=1;
               $choose=rand(0,25);
                $ans[$count]=substr($big,$choose,1);
                $count++;
           }
           else if($group==2){
               $check2=1;
                $choose=rand(0,3);
                 $ans[$count]=substr($other,$choose,1);
                 $count++;
           }
               }
               if($check2==1&&$check1==1&&$check==1)break;
             }
            if($check2==1&&$check1==1&&$check==1){
                 echo "產生的密碼 :".'&nbsp';
                 for($i=0;$i<8;$i++){
                     $_SESSION['record'][$_SESSION['count']++];
                     echo $ans[$i];
                 }
             }
           ?>
            <br><br>
             <input type ="button" onclick="javascript:location.href='https://p9056.isrcttu.net/midterm/prog4.php'" value="刷新">
      </font></h2>
      
     
       </div>
    </body>
</html>

