<!doctype html>
<?php
function page_redirect($page) {
    echo "<HTML>\n";
    echo "<HEAD>\n";
    echo "<META HTTP-EQUIV=REFRESH CONTENT=5;URL=\"$page\">\n";
    echo "<TITLE>Redirection...</TITLE>\n";
    echo "</HEAD>\n";
    echo "<BODY>\n</BODY>\n</HTML>";
    }
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
         <a href="home.html">首頁</a>&nbsp;&nbsp;&nbsp;
         <a href="reason.html">活動緣由</a>&nbsp;&nbsp;&nbsp;
         <a href="info.html">時程與資訊</a>&nbsp;&nbsp;&nbsp;
         <a href="picture.html">活動照片</a>&nbsp;&nbsp;&nbsp;
         <a href="rotate-receive.html">線上報名</a>&nbsp;&nbsp;&nbsp;
         <a href="contact.html">與我聯絡</a>&nbsp;&nbsp;&nbsp;
         </big>
         <hr width="75%" color="black">
         <h2>系上報名-報名結果</h2>

         <?php
             $name=$_GET["name"];
             $tel=$_GET["tel"];
             $people_num=$_GET["people_num"];
         
             if($tel=="") {
                echo "<font color=\"red\">你電話沒填</font><br>";
                echo "5秒後自動跳回報名表網頁";
                page_redirect("register.html");
               }
                
            
             else{
                echo "你填寫的名字為:" . $name. "<br>";
                echo "你的聯絡電話為:" . $tel;
                echo "你的報名費為:" . ($people_num-1)*500 . "元,請交給陳老師";
            }
         ?>     
         
      </center>

    </body>
</html>
