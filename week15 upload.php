<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>動態網頁</title>
    </head>
   <body background="back.jpg">
    <center>
        <h1>動態網頁課程 作業</h1>
        <hr width="75%" size="10pt" color="red">
        <style>a{text-decoration:none;}</style>
        <big>
            <a href="home.php">首頁</a>&nbsp;&nbsp;&nbsp;
            <a href="reason.php">活動緣由</a>&nbsp;&nbsp;&nbsp;
            <a href="info.php">時程與資訊</a>&nbsp;&nbsp;&nbsp;
            <a href="picture.php">活動照片</a>&nbsp;&nbsp;&nbsp;
            <a href="rotate-receive.html">線上報名</a>&nbsp;&nbsp;&nbsp;
            <a href="contact.php">與我聯絡</a>&nbsp;&nbsp;&nbsp;
            <a href="login.php">登入</a>&nbsp;&nbsp;&nbsp;
            <a href="logout.php">登出</a>
        </big>
        <hr width="75%" size="10pt" color="red">
        <?php
            if($_SESSION["login_status"]=="login_ok"){
                echo $_SESSION["hello"]."你好"."<br>";
            }
            else{
                
            }
            
        ?>
        <h2>照片上傳-接收端</h2>
        <?php
            echo "檔案名稱:".$_FILES['upload_file']['name']."<br>";
            echo "檔案大小:".$_FILES['upload_file']['size']."<br>";
            echo "檔案格式:".$_FILES['upload_file']['type']."<br>";
            echo "檔案名稱:".$_FILES['upload_file']['tmp_name']."<br>";
            echo "錯誤代碼:".$_FILES['upload_file']['error']."<br>";
            if($_FILES['upload_file']['type']=="image/jpeg"){
                echo "上傳檔案成功(jpg檔)<br>";
            }
            
            else{
                echo "<font color=\"red\">";
                die("格式只限jpg");
            }
            if((int)$_FILES['upload_file']['size']<10000){
                echo "上傳檔案大小符合規定(<10kB)<br>";
            }

            else{
                echo "<font color=\"red\">";
                die("檔案大小須<10kB");
            }
            echo $_SERVER["PHP_SELF"]."<br>";
            echo $_SERVER['SCRIPT_FILENAME']."<br>";
            echo __FILE__."<br>"; 
            echo dirname(__FILE__)."<br>";
            echo basename(__FILE__)."<br>";
            if(is_dir("pictures")){
                if(is_uploaded_file($_FILES['upload_file']['tmp_name'])){ //如果上傳之檔案存在
                    $dest_upload_file="C:/AppServ/www/pictures/".$_FILES['upload_file']['name'];
                    move_uploaded_file($_FILES['upload_file']['tmp_name'],$dest_upload_file); //現存之檔名->目的路徑./原來檔名
                }
            }
           
            
        ?>
    </center>
   
</html>
