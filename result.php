<?php

  // echo $_POST["confirm"];

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
  elseif ($_POST["confirm"]=="QUAKE"){
    echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py quake");
  }
  elseif ($_POST["confirm"]=="5CH"){
    echo shell_exec("export LANG=ja_JP.UTF-8; python3 5ch_ghost.py 5ch");
  }




 ?>
