<link rel="stylesheet" href="./home.css">


<?php

require_once('config.php');

session_start();
//POSTのvalidate

echo shell_exec("export LANG=ja_JP.UTF-8; python3 log.py ".$_SERVER['PHP_SELF']);


if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  echo '入力された値が不正です。';
  return false;
}
//DB内でPOSTされたメールアドレスを検索
try {
  $pdo = new PDO(DSN, DB_USER, DB_PASS);
  $stmt = $pdo->prepare('select * from userDeta where email = ?');
  $stmt->execute([$_POST['email']]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (\Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
//emailがDB内に存在しているか確認
if (!isset($row['email'])) {
  echo '<div class="main">';
  echo '<br>';
  echo 'メールアドレス又はパスワードが間違っています。';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '</div>';

  return false;
}
//パスワード確認後sessionにメールアドレスを渡す
if (password_verify($_POST['password'], $row['password'])) {
  session_regenerate_id(true); //session_idを新しく生成し、置き換える
  $_SESSION['EMAIL'] = $row['email'];

  echo '<div class="main">';
  echo '<br>';
  echo 'ログインしました';
  echo '<br>';
  echo '<br>';
  echo "<a href='./index.php'>HOME</a>";
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '</div>';

} else {
  echo '<div class="main">';
  echo '<br>';
  echo 'メールアドレス又はパスワードが間違っています。';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '</div>';
  return false;
}
