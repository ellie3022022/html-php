<!doctype html>
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
         <a href="rotate-receive.html">線上報名</a>&nbsp;&nbsp;&nbsp;
         <a href="contact.html">與我聯絡</a>&nbsp;&nbsp;&nbsp;
         <a href="login.html">登入</a>&nbsp;&nbsp;&nbsp;
         <a href="logout.html">登出</a>
         </big>

         <hr width="75%" color="black">
         <?php
              $height=$_POST["height"];
              $weight=$_POST["weight"];
              $height=$height/100;
              $result=$weight/($height*$height);
              if($result<18.5)
              {
                echo "你的BMI是".round($result,2)."<br>";
                echo "體重過輕";
              }
              elseif($result>=18.5 and $result<24)
              {
                echo "你的BMI是".round($result,2)."<br>";
                echo "正常範圍";
              }
              else
              {
                echo "你的BMI是".round($result,2)."<br>"; 
                echo "體重過重";
              }
              
         ?>     
      </center>

    </body>
</html>
