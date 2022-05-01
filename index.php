<link rel="stylesheet" href="./home.css">
<?php

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();
//ログイン済みの場合


  echo '';
  echo '<title>HallowinGhost</title>';
  echo '<link rel="icon" href="ghost.png"><!-- タイトルにアイコンを設定 -->';
  echo '<link rel="apple-touch-icon" href="icon.png"><!-- iphone のアイコンを設定 -->';

  echo '<div class="main">';

if (isset($_SESSION['EMAIL'])) {

  echo '<p>';
  echo '<br>';
  echo 'ようこそ' .h($_SESSION['EMAIL']) . "さん";
  echo '<br>';
  echo '<br>';
  echo "<a href='./organized_homepage/index.html'>homepage</a>";
  echo '<br>';
  echo '<br>';
  echo "<a href='http://35.81.113.142/' target='_blank'>Pleasanter</a>";
  echo '<br>';
  echo '<br>';
  echo "<a href='./news.php'>newsnews</a>";
  echo '<br>';
  echo '<br>';
  echo "<a href='https://www.netflix.com/browse' target_'_blank'>NETFLIX</a>";
  echo '<br>';
  echo '<br>';
  echo "<a href='/logout.php'>ログアウトはこちら。</a>";
  echo '<br>';
  echo '<br>';
  echo '<br>';
  // echo shell_exec("export LANG=ja_JP.UTF-8; python3 script.py");
  // echo shell_exec("export LANG=ja_JP.UTF-8; python3 yahoo_news.py 0");
  echo '<br>';
  echo '<br>';
  echo "<a href='./setup.html'>セットアップの手順</a>";
  echo '<br>';
  echo '<br>';

  exit;
}

  echo '</div>';
  echo '</p>';
 ?>

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
     <div class="title_img">
       <img src="title.png" alt="" title="タイトル">
     </div>
     <h1>ようこそ、ログインしてください。</h1>
     <form  action="login.php" method="post" class="login">
       <label for="email">E-MAIL</label>
       <input type="email" name="email" class="login">
       <label for="password">PASSWORD</label>
       <input type="password" name="password" class="login">
       <button type="submit" class="login">_____</button>
     </form>
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


     <!-- <h1>初めての方はこちら</h1>
     <form action="signUp.php" method="post" class="form">
       <label for="email">E-MAIL</label>
       <input type="email" name="email">
       <label for="password">PASSWORD</label>
       <input type="password" name="password">
       <button type="submit">_____</button>
       <p>※パスワードは半角英数字をそれぞれ１文字以上含んだ、８文字以上で設定してください。</p>
     </form> -->
   </div>

 </body>
</html>
