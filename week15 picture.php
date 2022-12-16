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
         <a href="picture.php">活動照片</a>&nbsp;&nbsp;&nbsp;
         <a href="rotate-receive.html">線上報名</a>&nbsp;&nbsp;&nbsp;
         <a href="contact.html">與我聯絡</a>&nbsp;&nbsp;&nbsp;
         <a href="login.php">登入</a>&nbsp;&nbsp;&nbsp;
         <a href="logout.php">登出</a>
         </big>

         <hr width="75%" color="black">
         <?php
            if($_SESSION["login_status"]=="login_ok"){
                echo $_SESSION["hello"]."你好"."<br>";
            }
            else{
              
            }
            
        ?>
        <h2>照片上傳</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input name="upload_file" type="file"><br>
            <?php
                    if($_SESSION["login_status"]==login_ok){
                        echo "<input type=\"submit\" value=\"上傳\">";
                        
                    }
                    
                ?>
        </form>

        <h2>活動照片</h2>
        <?php
        if (is_dir("pictures")) {
            $handle=opendir("C:/AppServ/www/pictures/");
            while ($file = readdir($handle)) { //readdir()內為上一行opendir取得之資源變數
                if ($file!="." and $file!="..") {
                    // echo $file."<br>";
                    echo "<img src=\"/pictures/".$file."\" width=\"100\">";
                    // "<img src=\"" .$file.  "\"width=\"100\">"
                    // <a href="1.jpg"><img src="1.jpg" width=100"></a>

                    echo "<a href=\"/pictures/".$file."\"><img src=\"?pictures/".$file."\"width=\"100\"></a>";
                }
            }
        }        
        ?>            
    </center>
   
</html>
