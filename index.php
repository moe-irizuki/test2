<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>4eachblog 掲示板</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>

<body>
  <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
    $stmt = $pdo->query("select * from 4each_keijiban");
    
    ?>
    
  <header>
    <img src="4eachblog_logo.jpg" width="246px" height="59px">
    
    <div class="menu">
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    
    </div>
  </header>
  
  <main>
    <div class="contents">
      
      <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        
        <div class="nf">
        <form method="post" action="insert.php">
          <h3>入力フォーム</h3>
          <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size=35 name="handlename">
          </div>
          <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size=35 name="title">
          </div>
          <div>
            <label>コメント</label>
            <br>
            <textarea cols="40" rows="5" name="comments"></textarea>
            <br>
            <input type="submit" class="submit" value="投稿する">
          </div>
        </form>
        </div>
          
        <?php
          while($row = $stmt->fetch()){
        
          echo "<div class='kiji'>";
          echo "<h3>".$row['title']."</h3>";
          echo "<div class='contents1'>";
          echo $row['comments'];
          echo "<div class='handlename'>posted by".$row['handlename']."</div>";
          echo "</div>";
          echo "</div>";
          }
          
        ?>
              
      </div>
      <div class="right">
        <h3>人気の記事</h3>
        <p>PHPオススメ本</p>
        <p>PHP&nbsp;MyAdminの使い方</p>
        <p>いま人気のエディタTop5</p>
        <p>HTMLの基礎</p>
        <h3>オススメリンク</h3>
        <p>インターノウス株式会社</p>
        <p>XAMPPのダウンロード</p>
        <p>Eclipseのダウンロード</p>
        <p>Braketsのダウンロード</p>
        <h3>カテゴリ</h3>
        <p>HTML</p>
        <p>PHP</p>
        <p>MySQL</p>
        <p>JavaScript</p>
      
      </div>
    </div>
  </main>
  
  <footer>
  </footer>
  
</body>


</html>