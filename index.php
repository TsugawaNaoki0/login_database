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
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo "<h2><a href='./organized_homepage/index.html'>ホームページ</a></h2>";
  echo "<h2><a href='http://35.81.113.142/' target='_blank'>Pleasanter</a></h2>";
  echo "<h2><a href='http://35.85.44.235/glpi/index.php?noAUTO=1' target='_blank'>GLPI</a></h2>";
  echo "<h2><a href='./news.php'>ニュース</a></h2>";
  echo "<h2><a href='https://www.netflix.com/browse' target='_blank'>NETFLIX</a></h2>";
  echo "<h2><a href='https://saizeria-gacha.web.app/' target='_blank'>サイゼリヤN円ガチャ</a></h2>";
  echo '<br>';
  echo "<h2><a href='./setup.html'>セットアップの手順</a></h2>";
  echo '<br>';
  echo "<h2><a href='/logout.php'>ログアウトはこちら。</a></h2>";
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
   <div id="cursor"></div>
   <div class="main">
     <div class="title_img">
       <img src="title.png" alt="" title="タイトル">
     </div>
     <h1><font color="white">LOGIN</font></h1>



     <?php
     // 設定
     $file= "./count.txt"; // カウント値保存ファイル
     $keta= 7; // 表示させる桁数指定

     // ファイルがあれば値を取り出し、なければ0値を＋１して書き込み保存
     $count= file_exists($file) ? rtrim(file_get_contents($file)) : 0;
     $count++; // カウント値を１上げる
     file_put_contents($file, $count, LOCK_EX); // 上げた値を保存


     // カウント表示
     printf("あなたは%0{$keta}d番目の訪問者です。", $count);


     ?>







     <form  action="login.php" method="post" class="login">
       <!-- <label for="email">E-MAIL</label> -->
       <input type="email" name="email" class="login" placeholder="E-MAIL" required>
       <br>
       <br>
       <!-- <label for="password">PASSWORD</label> -->
       <input type="password" name="password" class="login" placeholder="PASSWORD" required>
       <br>
       <br>
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
