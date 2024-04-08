<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";

?>


#session_start()：啟動 PHP 的 Session
#刪除 Session 中名為 "counter" 的變數  
  #unset($_SESSION['變數'])：刪除Session變數
  #session_unset() 或者session_destroy()也可以刪除Session變數
#顯示成功消息
#使用 <meta> 在 HTML中設置重定向,將在2秒後導向到 8.counter.php 頁面
