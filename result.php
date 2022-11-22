


<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="./home.css">
   <title>HallowinGhost</title>
    <link rel="icon" href="ghost.png"><!-- タイトルにアイコンを設定 -->
    <link rel="apple-touch-icon" href="icon.png"><!-- iphone のアイコンを設定 -->
 </head>
 <body>
    <div class="main">
            <!-- <br>
            <br>
            <br>
            <br>
            <br> -->
            <!-- <form action="result.php" method="post"> -->
            <!-- <br> -->
            <?php
              // echo shell_exec("export LANG=ja_JP.UTF-8; sudo su");



              if ($_POST["confirm"]=="GHOST"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py ghost");
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@GHOST");
              }
              elseif ($_POST["confirm"]=="STONE"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py stone");
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@STONE");
              }
              elseif ($_POST["confirm"]=="DICE"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py dice");
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@DICE");
              }
              elseif ($_POST["confirm"]=="KAIDAN"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py kaidan");
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@KAIDAN");
              }
              elseif ($_POST["confirm"]=="HOUSE"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py house");
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@HOUSE");
              }
              elseif ($_POST["confirm"]=="SWEEP"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py sweep");
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@SWEEP");
              }
              elseif ($_POST["confirm"]=="QUAKE"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py quake");
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@QUAKE");
              }
              elseif ($_POST["confirm"]=="RED"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py red");
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@RED");
              }
              elseif ($_POST["confirm"]=="GREEN"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py green");
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@GREEN");
              }
              elseif ($_POST["confirm"]=="5CH"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 5ch_ghost.py");
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@5CH");
              }
              elseif ($_POST["confirm"]=="WITCH"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 rikon.py ");
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@WITCH");
              }
              elseif ($_POST["confirm"]=="NO6"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 idol.py ");
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@NO6");
              }
              // elseif ($_POST["confirm"]=="WITCH"){
              //   echo shell_exec("export LANG=ja_JP.UTF-8; python3 rikon.py ");
              //   echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@WITCH");
              // }
              // elseif ($_POST["confirm"]=="WITCH"){
              //   echo shell_exec("export LANG=ja_JP.UTF-8; python3 rikon.py ");
              //   echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@WITCH");
              // }
              elseif ($_POST["confirm"]=="HATE"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 hate.py ");
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 ./log.py ".$_SERVER['PHP_SELF']."@HATE");
              }
             ?>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
    </div>

 </body>
</html>
