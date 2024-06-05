<?php
    ＃ 禁止顯示所有錯誤報告
    error_reporting(0);

    ＃ 啟動 PHP 的 Session
    session_start();

    ＃ 檢查使用者是否已登入
    if (!$_SESSION["id"]) {
        ＃ 當使用者未登入時，顯示提示訊息並在 3 秒後重定向到登入頁面
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    } else {   
        ＃ 建立資料庫連結
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        ＃ 刪除使用者的 SQL 命令
        $sql = "delete from user where id='{$_GET["id"]}'";
        
        ＃ 執行 SQL 命令，從資料庫刪除使用者
        if (!mysqli_query($conn, $sql)) {
            ＃ 當 SQL 命令執行失敗時，顯示錯誤訊息
            echo "使用者刪除錯誤";
        } else {
            ＃ 當 SQL 命令執行成功時，顯示成功訊息
            echo "使用者刪除成功";
        }

        ＃ 使用 HTML meta 標籤設置 3 秒後重定向到使用者管理頁面
        echo "<meta http-equiv=REFRESH content='3; url=18.user.php'>";
    }
?>
