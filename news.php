


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
            <br>
            <br>
            <br>
            <br>
            <br>
            <form action="result.php" method="post">
            <!-- <form action="news.php" method="post"> -->
              <!-- <input type="textarea" name="confirm" value=""> -->
              <select name="confirm" class="form">
                  <!-- <option value="blue">青</option> -->
                  <option value="GHOST">GHOST</option>
                  <option value="STONE">STONE</option>
                  <option value="DICE">DICE</option>
                  <option value="KAIDAN">KAIDAN</option>
                  <option value="HOUSE">HOUSE</option>
                  <option value="SWEEP">SWEEP</option>
                  <option value="QUAKE">QUAKE</option>
                  <option value="5CH">5CH</option>
              </select>

              <input type="submit" value="-----" class="form">
            </form>
            <br>
            <br>
            <br>
            <br>
            <br>
            <?php
              if ($_POST["confirm"]=="GHOST"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py ghost");
              }
              elseif ($_POST["confirm"]=="STONE"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py stone");
              }
              elseif ($_POST["confirm"]=="DICE"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py dice");
              }
              elseif ($_POST["confirm"]=="KAIDAN"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py kaidan");
              }
              elseif ($_POST["confirm"]=="HOUSE"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py house");
              }
              elseif ($_POST["confirm"]=="SWEEP"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py sweep");
              }
              elseif ($_POST["confirm"]=="QUAKE"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py quake");
              }
              elseif ($_POST["confirm"]=="5CH"){
                echo shell_exec("export LANG=ja_JP.UTF-8; python3 5ch_ghost.py 5ch");
              }
             ?>

    </div>

 </body>
</html>
