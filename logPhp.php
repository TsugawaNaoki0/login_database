<?php
  echo shell_exec("export LANG=ja_JP.UTF-8; python3 sample.py ".$_POST["email"]); 
?>
