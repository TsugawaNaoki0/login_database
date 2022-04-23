<?php

  // echo $_POST["confirm"];

  if ($_POST["confirm"]=="ZERO"){
    echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py 0");
  }
  if ($_POST["confirm"]=="STONE"){
    echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py stone");
  }




 ?>
