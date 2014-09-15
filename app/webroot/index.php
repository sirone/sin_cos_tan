<html>
  <head>
    <title>正弦・余弦・正接テーブル</title>
    <?php $version = time(); ?>
    <link rel="stylesheet" href="css/default.css?v=<?php echo $version; ?>">
  </head>
  <body>
    <div class="menu" id="menu">
      <div class="menu-title">
        コンテンツメニュー
      </div>
      <div class="menu-indexes">
        <a href="#all-table">正弦・余弦・正接テーブル</a><br />
        <a href="#sin-table">正弦テーブル</a><br />
        <a href="#cos-table">余弦テーブル</a><br />
        <a href="#tan-table">正接テーブル</a><br />
      </div>
    </div>

    <h1 id="all-table">正弦・余弦・正接</h1>
    <table border="1" style="border-spacing:0;">
      <thead>
        <tr>
          <td>正弦</td>
          <td>余弦</td>
          <td>正接</td>
        </tr>
      </thead>
      <tbody>
<?php for( $i=0; $i<180; $i++ ) : ?>
        <tr>
          <td><pre><?php echo sprintf("%' 9.4f",sin($i)); ?></pre></td>
          <td><pre><?php echo sprintf("%' 9.4f",cos($i)); ?></pre></td>
          <td><pre><?php echo sprintf("%' 9.4f",tan($i)); ?></pre></td>
        </tr>
<?php endfor; ?>
      </tbody>
    </table>
    <h1 id="sin-table">正弦のみ</h1><a href="#menu">メニューに戻る</a>
    <table border="1" style="border-spacing:0;">
      <thead>
        <tr>
          <td>正弦</td>
        </tr>
      </thead>
      <tbody>
<?php for( $i=0; $i<180; $i++ ) : ?>
        <tr>
          <td><pre><?php echo sprintf("%' 9.4f",sin($i)); ?></pre></td>
        </tr>
<?php endfor; ?>
      </tbody>
    </table>
    <h1 id="cos-table">余弦のみ</h1><a href="#menu">メニューに戻る</a>
    <table border="1" style="border-spacing:0;">
      <thead>
        <tr>
          <td>余弦</td>
        </tr>
      </thead>
      <tbody>
<?php for( $i=0; $i<180; $i++ ) : ?>
        <tr>
          <td><pre><?php echo sprintf("%' 9.4f",cos($i)); ?></pre></td>
        </tr>
<?php endfor; ?>
      </tbody>
    </table>
    <h1 id="tan-table">正接のみ</h1><a href="#menu">メニューに戻る</a>
    <table border="1" style="border-spacing:0;">
      <thead>
        <tr>
          <td>正接</td>
        </tr>
      </thead>
      <tbody>
<?php for( $i=0; $i<180; $i++ ) : ?>
        <tr>
          <td><pre><?php echo sprintf("%' 9.4f",tan($i)); ?></pre></td>
        </tr>
<?php endfor; ?>
      </tbody>
    </table>
  </body>
</html>