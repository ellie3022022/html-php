<?php
  session_start();
  echo $_SESSION["login_status"];
?>

<!doctype html>
<?php
$login_status= $_POST["bmi_status"];  
echo $login_status;   
?> 
<html>
<head>
<meta charset="utf-8">
<title>動態網頁課程</title>
</head>

<!-- <body bgcolor="green">-->
    <body background="back.jpg">
       <style>a{text-decoration: none;}</style>
       <center>
        <h1>動態網頁課程 作業</h1>
         <hr width="75%" color="black">
         <big>
         <a href="home.php">首頁</a>&nbsp;&nbsp;&nbsp;
         <a href="reason.html">活動緣由</a>&nbsp;&nbsp;&nbsp;
         <a href="info.html">時程與資訊</a>&nbsp;&nbsp;&nbsp;
         <a href="picture.html">活動照片</a>&nbsp;&nbsp;&nbsp;
         <a href="rotate-receive.php">線上報名</a>&nbsp;&nbsp;&nbsp;
         <a href="contact.html">與我聯絡</a>&nbsp;&nbsp;&nbsp;
         <a href="login.html">登入</a>&nbsp;&nbsp;&nbsp;
         <a href="logout.html">登出</a>
         </big>
         <hr width="75%" color="black">
         
         <?php
            srand((double)microtime()*1000000);
            $randval=rand(1,5);
            //echo $randval;
            if($randval==1)
            { echo "參加系考真好玩";}
            elseif($randval==2)
            { echo "你使用亂數抽到獎:獎品A5和牛";}
            elseif($randval==3)
            { echo "人生沒有彩排,每天都是現場直播";}
            elseif($randval==4)
            { echo "天賜你一雙翅膀,就應該被紅燒...";}
            elseif($randval==5)
            { echo "想要有空餘時間,就不該浪費時間";}
        ?>     
            <form action="bmi.php" method="post">
                身高:<input type="text" name="height"><br>
                體重:<input type="text" name="weight"><br>
                <input type="submit" value="送出資料"> 
      </center>

    </body>
</html>
