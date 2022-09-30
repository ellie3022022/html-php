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
         <a href="home.html">首頁</a>
         <a href="reason.html">活動緣由</a>
         <a href="info.html">時程與資訊</a>
         <a href="picture.html">活動照片</a>
         <a href="rotate-receive.html">線上報名</a>
         <a href="contact.html">與我聯絡</a>
         </big>
         <hr width="75%" color="black">
         <h2>系上報名-報名結果</h2>

         <?php
             $name=$_GET["name"];
             $tel=$_GET["tel"];
             $people_num=$_GET["people_num"];
             echo "你填寫的名字為:" . $name . "<br>";
             echo "你的聯絡電話為:" . $tel;
             echo "你的報名費為:" . ($people_num-1)*500 . "元,請交給陳老師";
         ?>     
         
      </center>

    </body>
</html>  
