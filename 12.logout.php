<?php
    // 啟動 PHP 的 Session
    session_start();

    // 刪除會話變量 "id"，用來標識用戶已登出
    unset($_SESSION["id"]);

    // 輸出登出成功的訊息
    echo "登出成功....";

    // 使用 HTML meta 標籤設置 3 秒後重定向到登入頁面 2.login.html
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>

登出功能
