<!doctype html>
<?php
echo $_POST["login_status"];     
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
         <h2>線上報名</h2>
         <table border="1">
            <form action="rotate-receive.php" method="get">
                <tr><td>姓名:</td><td><input type="text" name="name"></td></tr>
                <tr>
                    <td>連絡電話<font color="red">(*必填)</font>:</td><td><input type="text" name="tel"></td>
                </tr>
                <tr><td>幾人</td><td><select name="people_num">
                    <option value="1">1人</option>
                    <option value="2">2人</option>
                    <option value="3">3人</option>
                </select>(含自己,除自己外一人500元):</td></tr>
            <tr><td colspan="2"><center><input type="submit" value="我要報名">   

            <?php
                 if($login_status=="login_ok")
                 {
                    echo "<input type=\"submit\" value=\"我要報名\">";
                 }
                 else
                 {
                    echo "必須登入才可報名";
                 }
            ?>
                 </center></td></tr> 

            </form>
        </table>
      </center>

    </body>
</html>
