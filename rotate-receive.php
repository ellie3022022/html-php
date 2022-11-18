<?php
  session_start();
?>

<!doctype html>
<?php
    $login_status= $_POST["login_status"]; 
    $table_color=$_GET["table_color"];
    $background=$_GET["background"];
    //echo $background;
    //echo $table_color;   
?>     
<html>
<head>
<meta charset="utf-8">
<title>動態網頁課程</title>
</head>

<!-- <body bgcolor="green">-->
        <?php
            if($background=="背景1"){
                echo "<body background=\"背景1.jpg\">";
            }
            elseif($background=="背景2"){
                echo "<body background=\"背景2.jpg\">";
            }
            elseif($background=="背景3"){
                echo "<body background=\"背景3.jpg\">";
            }

        ?>
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
         <h2>線上報名</h2>

        表格框線
        <a href="rotate-receive.php?table_color=red"><img src="red.png" width=15></a>
        <a href="rotate-receive.php?table_color=yellow"><img src="yellow.png" width=15></a>
        <a href="rotate-receive.php?table_color=green"><img src="green.png" width=15></a>
        <?php
            if($table_color=="red"){
                echo "<table border=\"1\" bordercolor=\"red\">";
            }
            elseif($table_color=="yellow"){
                echo "<table border=\"1\" bordercolor=\"yellow\">";
            }
            elseif($table_color=="green"){
                echo "<table border=\"1\" bordercolor=\"green\">";
            }
            else
                echo "<table border=\"1\" bordercolor=\"black\">";
        ?>        

        背景風格
        <a href="rotate-receive.php?background=背景1"><img src="背景1.jpg" width=15></a>
        <a href="rotate-receive.php?background=背景2"><img src="背景2.jpg" width=15></a>
        <a href="rotate-receive.php?background=背景3"><img src="背景3.jpg" width=15></a>



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
