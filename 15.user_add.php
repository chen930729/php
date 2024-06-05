<?php

＃　禁止顯示所有錯誤報告
error_reporting(0);

＃　啟動 PHP 的 Session
session_start();

＃　檢查使用者是否已登入
if (!$_SESSION["id"]) {
    // 當使用者未登入時，顯示提示訊息並在 3 秒後重定向到登入頁面
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
} else {    
    ＃　建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    
    ＃　新增資料的 SQL 命令
    $sql = "insert into user(id, pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
    
    ＃　執行 SQL 命令，將資料插入資料庫
    if (!mysqli_query($conn, $sql)) {
        ＃　當 SQL 命令執行失敗時，顯示錯誤訊息
        echo "新增命令錯誤";
    } else {
        ＃　當 SQL 命令執行成功時，顯示成功訊息並在 3 秒後重定向到使用者管理頁面
        echo "新增使用者成功，三秒鐘後回到網頁";
        echo "<meta http-equiv=REFRESH content='3; url=18.user.php'>";
    }
}
?>
