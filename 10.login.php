<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "登入成功";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

  else{
    echo "帳號/密碼 錯誤";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>


#簡單的登入系統
#把login加上session功能，紀錄登入帳號
#如果登入，顯示 "登入成功" ，在 3 秒後自動重新導向到 "11.bulletin.php" 頁面
#如果登入失敗，顯示 "帳號/密碼 錯誤"，在 3 秒後自動重新導向到 "2.login.html" 頁面
#用戶會根據他們提供的帳號和密碼被重新導向到不同的頁面
