<?php
    session_start();
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>


#簡單的計數器
#利用php的session變數
#要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
#$_SESSION['變數'] = 值。設定Session變數
#isset($_SESSION['變數'])：判斷Session變數是否存在
#當用戶點擊訪問到9.reset_counter.php這個連結時，會重置計數器的值。
