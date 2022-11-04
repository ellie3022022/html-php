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
         <a href="rotate-receive.php">線上報名</a>&nbsp;&nbsp;&nbsp;
         <a href="contact.html">與我聯絡</a>&nbsp;&nbsp;&nbsp;
         <a href="login.html">登入</a>&nbsp;&nbsp;&nbsp;
         <a href="logout.html">登出</a>
         </big>
         <hr width="75%" color="black">
         <h2>登入檢核</h2>
         <?php
             require("aa.php");
             $account=$_POST["account"];
             $password=$_POST["password"];
             for ($i=0;$i<3;$i++)
             {
                if($account==$account_correct[$i] && $password_correct[$i]){$check="ok";}
             }

             if($check="ok")
             {
                echo "帳密正確";
                echo "<form action=\"rotate-receive.php\" method=\"post\">";
                echo "<input type=\"hidden\" name=\"login_status\" value=\"login_ok\">";
                echo "<input type=\"submit\" value=\"按此跳到報名表報名\">";
                echo "</form>";
             }
             else{
                echo "<font color=\"red\">帳密錯誤,5秒後跳回登入網頁";
                page_redirect("login.html");
             }
         ?>    

         
        </center>

    </body>
</html>
