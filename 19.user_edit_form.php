<html>
<head>
    <title>修改使用者</title>
</head>
<body>
<?php
    # 禁止顯示所有錯誤報告
    error_reporting(0);

    # 啟動 PHP 的 Session
    session_start();

    # 檢查使用者是否已登入
    if (!$_SESSION["id"]) {
        # 當使用者未登入時，顯示提示訊息並在 3 秒後重定向到登入頁面
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    } else {   
        # 建立與資料庫的連結
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        # 從資料庫中選取指定帳號的使用者資料
        $result = mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row = mysqli_fetch_array($result);

        # 顯示用於修改使用者資料的表單
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
?>
</body>
</html>
